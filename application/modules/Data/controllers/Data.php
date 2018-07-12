<?php
class Data extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Data/M_Data');
	}

	function list_data()
	{
		$data['page_header'] = 'DPMPTSPTK';
		$data['description'] = 'Data Terpadu';
		$data['content_view'] = 'Data/data_v';
		$data['add_button'] = '<div class = "row">
	<div class="col-md-12"><a href="addData" class="btn btn-primary pull-right"> Tambah Data Baru</a></div>
</div>';
		$data['data_tabel'] = $this->create_data_tabel();
		
		$this->template->call_admin_template($data);
	}

	function addData()
	{
		$data['desaa'] = $this->select_desa();
		$data['page_header'] = 'Form';
		$data['description'] = 'Tambah Data Keluarga Baru';
		$data['action']=base_url('Data/post_kk');
		$data['content_view'] = 'Data/addKK_v';
		$this->template->call_admin_template($data);
	}

	function addDetail($id_data)
	{
		$data['desaa'] = $this->select_desa();
		$data['dataa'] = $this->M_Data->get_id($id_data)->result();
		$data['page_header'] = 'Form';
		$data['description'] = 'Kelengkapan Data Terpadu';
		$data['content_view'] = 'Data/addData_v';
		$this->template->call_admin_template($data);
	}

	function editKk($id_data)
	{
		$data['desaa'] = $this->select_data();
		$data['dataa'] = $this->M_Data->get_id($id_data)->result();
		$data['page_header'] = 'Form';
		$data['description'] = 'Ubah Data Keluarga';
		$data['action']=base_url('Data/edit_kk');
		$data['content_view'] = 'Data/editData_v';
		$this->template->call_admin_template($data);
	}

	function select_desa()
	{
		$desaa=$this->M_Data->get_desa();
		$options="";
		if(count($desaa)){
			foreach ($desaa as $key=>$value){
				$options .= "<option value = '{$value->id_desa}'>{$value->desa}</option>";
			}
		}
		return $options;
	}

	function post_kk()
	{
		$id_data = $this->input->post('id_kk');
		$dataa= array('id_kk'=>$this->input->post('id_kk'),
					'no_kk'=>$this->input->post('no_kk'),
					'alamat'=>$this->input->post('alamat'),
					'id_desa'=>$this->input->post('desa'),
					'tgl_pendataan'=>date('Y-m-d', 
					strtotime($this->input->post('tgl_pendataan'))),
					'petugas'=>$this->input->post('petugas'),
					'tgl_input'=>date('Y-m-d'),
					);
			$this->M_Data->post_data($dataa);
            redirect(''.base_url().'Admin/data');
	}

	function add_pdd()
	{
		$this->M_Data->add_pdd();
        redirect(''.base_url().'Admin/data');
	}

	function add_aset()
	{
		$this->M_Data->add_aset();
        redirect(''.base_url().'Admin/data');
	}

	function add_konsumsi()
	{
		$this->M_Data->add_konsumsi();
        redirect(''.base_url().'Admin/data');
	}

	function delete_kk($id_data)
	{
		$this->M_Data->delete($id_data);
		redirect(''.base_url().'Admin/Data');
	}

	function edit_kk(){
		$id_data = $this->input->post('id_kk');
		$dataa= array('id_kk'=>$this->input->post('id_kk'),
					'alamat'=>$this->input->post('alamat'),
					'id_desa'=>$this->input->post('desa'),
					'tgl_pendataan'=>date('Y-m-d', 
					strtotime($this->input->post('tgl_pendataan'))),
					'petugas'=>$this->input->post('petugas'),
					);
			$this->M_Data->update_data($id_data, $dataa);
            redirect(''.base_url().'Data');		
	}

	function create_data_tabel(){
		$dataa=$this->M_Data->get_all();
		$data_tabel="";

		if(count($dataa)>0){
			$counter="1";
			foreach ($dataa as $key => $value) {
				$data_tabel.="<tr>";
				$data_tabel.="<td>{$counter}</td>";
				$data_tabel.="<td>{$value->no_kk}</td>";
				$data_tabel.="<td>{$value->alamat}</td>";
				$data_tabel.="<td>{$value->petugas}</td>";
				$data_tabel.="<td>".date('d-m-Y', strtotime($value->tgl_pendataan));"</td>";
				$data_tabel.="<td><a href='".base_url()."Data/addDetail/{$value->id_kk}'><i class='ace-icon fa fa-search-plus'></i></a>   <a href='".base_url()."Data/editKk/{$value->id_kk}'><i class='ace-icon fa fa-pencil'></i></a>   <a href='".base_url()."Data/delete_kk/{$value->id_kk}'><i class='ace-icon fa fa-trash'></i></a></td>";
				$data_tabel.="</tr>";
			}
		}
		return $data_tabel;
	}
}