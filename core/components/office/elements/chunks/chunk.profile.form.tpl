<form action="" method="post" class="form-horizontal" id="office-profile-form">
	<div class="header">
		<small>[[%office_profile_header]]</small>
	</div>

	<div class="control-group">
		<label class="control-label">[[%office_profile_gravatar]]</label>
		<div class="controls">
			<img src="[[+gravatar]]?s=100" alt="[[+email]]" title="[[+email]]"  style="margin-left:40px;" />
			<br/><small>[[%office_profile_gravatar_desc]]</small>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">[[%office_profile_fullname]]<sup class="red">*</sup></label>
		<div class="controls">
			<input type="text" name="fullname" value="[[+fullname]]" placeholder="[[%office_profile_fullname]]" />
			<span class="help-inline message"></span>
			<br/><small>[[%office_profile_fullname_desc]]</small>
		</div>
	</div>

	<div class="control-group">
		<label class="control-label">[[%office_profile_email]]<sup class="red">*</sup></label>
		<div class="controls">
			<input type="text" name="email" value="[[+email]]" placeholder="[[%office_profile_email]]" />
			<span class="help-inline message"></span>
			<br/><small>[[%office_profile_email_desc]]</small>
		</div>
	</div>

	<div class="form-actions">
		<button type="submit" class="btn btn-primary">[[%office_profile_save]]</button>
		&nbsp;&nbsp;&nbsp;&nbsp;
		<button type="reset" class="btn">[[%office_profile_reset]]</button>
	</div>
</form>