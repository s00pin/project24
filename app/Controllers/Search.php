<?php

namespace App\Controllers;

use App\Models\MediaModel;
use App\Models\ShowModel;

class Search extends BaseController
{
    public function index()
    {
        $query = $this->request->getGet('query'); 
        $mediaModel = new MediaModel();
        $showModel = new ShowModel();

        $model = model(ShowModel::class);
        $data = [
            'show'  => $model->getShow(),
            'title' => 'Top shows and movies',
        ];

        if (!empty($query)) {
            // Perform search based on the query
            $media = $mediaModel->like('title', $query, 'both')->findAll();
            $shows = $showModel->like('title', $query, 'both')->findAll();
        } else {
            // If no search query provided, retrieve all records
            $media = $mediaModel->findAll();
            $shows = $showModel->findAll();
        }
        return view('templates/header', $data)
            . view('media/search_results', ['media' => $media, 'shows' => $shows])
            . view('templates/footer');
    }
}