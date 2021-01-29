<?php

namespace App\Controllers;

use App\Models\AccountModel;
use CodeIgniter\Controller;

class Account extends Controller
{

    // show account list
    public function index()
    {
        $accountModel = new AccountModel();
        $data['accounts'] = $accountModel->orderBy('id', 'DESC')
            ->findAll();
        return view('account/account_view', $data);
    }

    // add account form
    public function create()
    {
        return view('account/add_account');
    }

    // insert data (account)
    public function store(){
        $accountModel = new AccountModel();
        $data =[
            'name' => $this->request->getVar('name'),
            'address' => $this->request->getVar('address'),
            'phone' => $this->request->getVar('phone_number'),
        ];
        $accountModel->insert($data);
        return $this->response->redirect(site_url('/account_list'));
    }

    // show single user
    public function singleAccount($id = null)
    {
        $accountModel = new AccountModel();
        $data['user_obj'] = $accountModel->where('id', $id)->first();
        return view('account/edit_view', $data);
    }

    // update account data
    public function update(){
        $accountModel = new AccountModel();
        $id = $this->request->getVar('id');
        $data =[
            'name' => $this->request->getVar('name'),
            'address' => $this->request->getVar('address'),
            'phone' => $this->request->getVar('phone'),
        ];
        $accountModel->update($id,$data);
        return $this->response->redirect(site_url('/account_list'));
    }

    // delete user
    public function delete($id= null){
        $accountModel = new AccountModel();
        $data['user']= $accountModel->where('id',$id)->delete($id);
        return $this->response->redirect(site_url('/account_list'));
    }
}