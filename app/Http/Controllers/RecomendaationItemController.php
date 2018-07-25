<?php

namespace App\Http\Controllers;

use App\Service\Recomended;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Wisata;
use Cache;

class RecomendaationItemController extends Controller
{
  public function index()
  {
      if(Auth::check()){
          $usersWithRating = User::get()
          ->groupBy('id')
          ->map(function($user, $userId) {
              $wisatas = Wisata::get();

              $ratings = [];
              foreach ($wisatas as $wisata)
              {
                  $rating = $wisata
                      ->ratings()->where('user_id', $userId)
                      ->first()->rating ?? null
                  ;
                  $ratings[$wisata->id] = $rating !== null ? (int) $rating : null;
              }

              return $ratings;
          })
          ->toArray()
      ;

      $itemBased = $this->getItemRating($usersWithRating);
      //dd($itemBased);
      // return $itemBased;
      //$userBased  = $this->getUserRating($usersWithRating);

      //dd($userBased);

      return view('wisataDetail', compact('itemBased'));
      } else{
          $itemBased = Wisata::latest()->paginate(4);
          return view('wisataDetail', compact('itemBased'));
      }


  }

  private function getUserRating(array $usersWithRating)
  {
      $recomendation = new Recomended($usersWithRating);
      $activeUser = request()->user();

      $recomendationResult = $recomendation->predictRating();
      // dd($recomendationResult);

      return $this->hydrateData($recomendationResult);

  }


  private function getItemRating(array $usersWithRating)
  {

      $recomendation = new Recomended($usersWithRating);
      $activeUser = request()->user();

      $recomendationResult = $recomendation->predictItemBased();
      //dd($recomendationResult);

      return $this->hydrateData($recomendationResult);
  }

  private function hydrateData(array $recomendationResult)
  {
      $activeUser = request()->user();

      //dd($recomendationResult);
      //$data = collect($recomendationResult[$activeUser->id])->take(20)->toArray();
      $data = ($recomendationResult[$activeUser->id]);
      $ids = collect(array_keys($data))->map(function($value) {
          return Wisata::find($value);
      });

      $reject = $ids->reject(function($wisata) use($activeUser) {
          return $wisata->ratings()->where('user_id', $activeUser->id)->exists();
      })->flatten();



      return $reject;
  }
}
