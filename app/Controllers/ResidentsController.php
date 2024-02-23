<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ResidentsModel;

class ResidentsController extends BaseController
{
    public function index()
    {
        $fetchResidents = new ResidentsModel();
        $data['residents'] = $fetchResidents->findAll();

        return view('residents/list', $data);
    }
    public function createResident()
    {
        // add as residents
        $data['residentNumber'] = '50000_'.uniqid();

        return view('residents/add', $data);
    }
    public function storeResident()
    {
        // store a residents
        $insertResidents = new ResidentsModel();

        if ($img = $this->request->getFile('residentProfile')) {
            if($img->isValid() && ! $img->hasMoved()) {
                $imageName = $img->getRandomName();
                $img->move('uploads/', $imageName);
            }
        }

        $data = array (
            'block_#' => $this->request->getPost('residentBlock'),
            'lot_#' => $this->request->getPost('residentLot'),
            'residents_name' => $this->request->getPost('residentName'),
            'residents_age' => $this->request->getPost('residentAge'),
            'residents_address' => $this->request->getPost('residentAddress'),
            'residents_gender' => $this->request->getPost('residentGender'),
            'residents_email' => $this->request->getPost('residentEmail'),
            'residents_password' => $this->request->getPost('residentPassword'),
            'residents_profile' => $imageName,
        );

        $insertResidents->insert($data);
        return redirect()->to('/residents')->with('success', 'Residents Added Successfully!');
    }
    public function editResident($residentId)
{
    $residentsModel = new ResidentsModel();
    $resident = $residentsModel->find($residentId);

    // Pass the $resident data to the view
    return view('residents/edit', ['resident' => $resident]);
}

    public function updateResident($id)
    {
        // update a residents
        $updateResidents = new ResidentsModel();
        $db = db_connect();

        if ($img = $this->request->getFile('residentProfile')) {
            if($img->isValid() && ! $img->hasMoved()) {
                $imageName = $img->getRandomName();
                $img->move('uploads/', $imageName);
            }
        }
        if(!empty($_FILES['residentProfile']['name'])) {
            $db->query("UPDATE tbl_residents SET residents_profile = '$imageName' WHERE id = '$id'");
        }
        $data = array (
            'block_#' => $this->request->getPost('residentBlock'),
            'lot_#' => $this->request->getPost('residentLot'),
            'residents_name' => $this->request->getPost('residentName'),
            'residents_age' => $this->request->getPost('residentAge'),
            'residents_address' => $this->request->getPost('residentAddress'),
            'residents_gender' => $this->request->getPost('residentGender'),
            'residents_email' => $this->request->getPost('residentEmail'),
            'residents_password' => $this->request->getPost('residentPassword'),
        );
        
        $updateResidents->update($id, $data);

        return redirect()->to('/residents')->with('success', 'Residents Update Successfully!');
    }
    public function deleteResident($id)
    {
        $deleteResidents = new ResidentsModel();
        $deleteResidents->delete($id);

        return redirect()->to('/residents')->with('success', 'Residents Delete Successfully!');
    }
}
