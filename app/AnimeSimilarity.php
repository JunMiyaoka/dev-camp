<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnimeSimilarity extends Model
{
    protected $table = 'anime_similarities';

    public function getRelatedAnimeId($animeId)
    {
         $results = $this->select('related_anime_id')
                         ->where('anime_id', $animeId)
                         ->orderBy('similarity', 'desc')
                         ->take(20)
                         ->get()
                         ->toArray();

        foreach ($results as $result) {
            $relatedAnimeId[] = $result['related_anime_id'];
        }

        return $relatedAnimeId;
    }
}
