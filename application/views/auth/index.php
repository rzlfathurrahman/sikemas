<div class="container">
	<section class="mt-3">
		<h1><?= lang('index_heading');?></h1>
		<p><?= lang('index_subheading');?></p>

		<div id="infoMessage"><?= $message;?></div>

		<table cellpadding=0 class="table table-striped" cellspacing=10>
			<tr>
				<th>#</th>		
				<th>Nama Lengkap</th>
				<th><?= lang('index_email_th');?></th>
				<th><?= lang('index_groups_th');?></th>
				<th><?= lang('index_status_th');?></th>
				<th><?= lang('index_action_th');?></th>
			</tr>
			<?php $no = 1; foreach ($users as $user):?>
				<tr>
					<td><?= $no++ ?></td>
					<td><?= htmlspecialchars($user->first_name." ".$user->last_name,ENT_QUOTES,'UTF-8');?></td>
					<td><?= htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
					<td>
						<?php foreach ($user->groups as $group):?>
							<?= anchor("auth/edit_group/".$group->id, '<span class="badge badge-pill badge-info">'.htmlspecialchars($group->name,ENT_QUOTES,'UTF-8').'</span>') ;?><br />
							<?php endforeach?>
					</td>
					<td><?= ($user->active) ? anchor("auth/deactivate/".$user->id,'<span class="badge badge-pill badge-success">'.lang('index_active_link').'</span>') : anchor("auth/activate/". $user->id,'<span class="badge badge-pill badge-danger">'.lang('index_inactive_link').'</span>');?></td>
					<td><?= anchor("auth/edit_user/".$user->id, '<span class="badge badge-pill badge-primary">Edit</span>') ;?></td>
				</tr>
			<?php endforeach;?>
		</table>
	</section>
</div>