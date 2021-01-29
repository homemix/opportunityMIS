<?php

namespace App\Controllers;

use App\Models\OpportunityModel;
use CodeIgniter\Controller;

class Opportunity extends Controller
{

    // show opportunity list
    public function index()
    {
        $opportunityModel = new OpportunityModel();
        $data['opportunities'] = $opportunityModel->orderBy('id', 'DESC')
            ->findAll();
        return view('opportunity/opportunity_view', $data);
    }

    // add opportunity form
    public function create()
    {
        return view('opportunity/add_opportunity');
    }

    // insert data (opportunity)
    public function store(){
        $opportunityModel = new opportunityModel();
        $data =[
            'name' => $this->request->getVar('name'),
            'amount' => $this->request->getVar('amount'),
            'stage' => $this->request->getVar('stage'),
        ];
        $opportunityModel->insert($data);
        return $this->response->redirect(site_url('/opportunity_list'));
    }

    // show single user
    public function singleOpportunity($id = null)
    {
        $opportunityModel = new opportunityModel();
        $data['user_obj'] = $opportunityModel->where('id', $id)->first();
        return view('opportunity/edit_view', $data);
    }

    // update opportunity data
    public function update(){
        $opportunityModel = new opportunityModel();
        $id = $this->request->getVar('id');
        $data =[
            'name' => $this->request->getVar('name'),
            'amount' => $this->request->getVar('amount'),
            'stage' => $this->request->getVar('stage'),
        ];
        $opportunityModel->update($id,$data);
        return $this->response->redirect(site_url('/opportunity_list'));
    }

    // delete user
    public function delete($id= null){
        $opportunityModel = new opportunityModel();
        $data['opportunity']= $opportunityModel->where('id',$id)->delete($id);
        return $this->response->redirect(site_url('/opportunity_list'));
    }
}