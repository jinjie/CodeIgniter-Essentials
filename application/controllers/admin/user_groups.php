<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User_groups extends Admin_Controller {

	public function index() {
		$groups = new Group();
		
		$groups->include_related_count('user')->get();
		
		$this->template->set(array(
			'groups'	=> $groups,
		));
		
		$this->template->set_partial('actions', 'admin/user_groups/_actions');
		$this->template->build('admin/user_groups/index');
	}
	
	public function create() {
		if ($this->input->post('submit')) {
			$create_group = $this->ion_auth->create_group(
				$this->input->post('name'),
				$this->input->post('description')
			);
			
			if ($create_group) {
				$this->flash->success($this->ion_auth->messages());
				redirect("admin/user_groups");
			} else {
				$this->flash->error_now($this->ion_auth->errors());
			}
		}
		
		$this->template->build('admin/user_groups/form');
	}
	
	public function edit($group_id = FALSE) {
		if (! $group = new Group($group_id)) {
			$this->flash->error('Group does not exist');
			redirect("admin/user_groups");
		}
		
		if ($this->input->post('submit')) {
			/**
			 * Check if the group name is filled. ion_auth does not do the
			 * validation on update_group
			 */
			 
			$this->form_validation->set_rules(array(
				array(
					'field'	=> 'name',
					'label'	=> 'Group Name',
					'rules'	=> 'required',
				),
			));
			
			if ($this->form_validation->run()) {			
				$update_group = $this->ion_auth->update_group(
					$group_id,
					$this->input->post('name'),
					array(
						'description'	=> $this->input->post('description'),
					)
				);
				
				if ($update_group) {
					$this->flash->success_now($this->ion_auth->messages());
				} else {
					$this->flash->error_now($this->ion_auth->errors());
				}
			}
		}
		
		$this->template->set('group', $group);
		$this->template->build('admin/user_groups/form');
	}
	
	public function delete($group_id = FALSE) {
		if ($this->ion_auth->delete_group($group_id)) {
			$this->flash->success($this->ion_auth->messages());
		} else {
			$this->flash->error("Cannot delete group");
		}
		
		redirect("admin/user_groups");
	}

}


/* End of file */