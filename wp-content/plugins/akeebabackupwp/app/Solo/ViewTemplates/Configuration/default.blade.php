<?php
/**
 * @package   solo
 * @copyright Copyright (c)2014-2024 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license   GNU General Public License version 3, or later
 */

use Awf\Text\Text;

defined('_AKEEBA') or die();

/** @var $this \Solo\View\Configuration\Html */

$router = $this->getContainer()->router;

?>
{{-- Configuration Wizard pop-up --}}
@if($this->promptForConfigurationWizard)
	@include('Configuration/confwiz_modal')
@endif

{{-- Modal dialog prototypes --}}
@include('CommonTemplates/FTPBrowser')
@include('CommonTemplates/SFTPBrowser')
@include('CommonTemplates/FTPConnectionTest')
@include('CommonTemplates/ErrorModal')
@include('CommonTemplates/FolderBrowser')

@if($this->securesettings == 1)
    <div class="akeeba-block--success">
		<?php echo Text::_('COM_AKEEBA_CONFIG_UI_SETTINGS_SECURED'); ?>
    </div>
@elseif($this->securesettings == 0)
    <div class="akeeba-block--failure">
		<?php echo Text::_('COM_AKEEBA_CONFIG_UI_SETTINGS_NOTSECURED'); ?>
    </div>
@endif

@include('CommonTemplates/ProfileName')

<div class="akeeba-block--info">
	@lang('COM_AKEEBA_CONFIG_WHERE_ARE_THE_FILTERS')
</div>


<form name="adminForm" id="adminForm" method="post"
	  action="@route('index.php?view=configuration')"
      class="akeeba-form--horizontal akeeba-form--with-hidden akeeba-form--configuration">

    <div class="akeeba-panel--info" style="margin-bottom: -1em">
        <header class="akeeba-block-header">
            <h5>
	            @lang('COM_AKEEBA_PROFILES_LABEL_DESCRIPTION')
            </h5>
        </header>

		<div class="akeeba-form-group">
			<label for="profilename" rel="popover"
				   data-original-title="@lang('COM_AKEEBA_PROFILES_LABEL_DESCRIPTION')"
				   data-content="@lang('COM_AKEEBA_PROFILES_LABEL_DESCRIPTION_TOOLTIP')">
				@lang('COM_AKEEBA_PROFILES_LABEL_DESCRIPTION')
			</label>
            <input type="text" name="profilename" id="profilename" value="{{ $this->profilename }}" />
		</div>

		<div class="akeeba-form-group">
			<label for="quickicon" rel="popover"
				   data-original-title="@lang('COM_AKEEBA_CONFIG_QUICKICON_LABEL')"
				   data-content="@lang('COM_AKEEBA_CONFIG_QUICKICON_DESC')">
				@lang('COM_AKEEBA_CONFIG_QUICKICON_LABEL')
			</label>
            <div>
                <input type="checkbox" name="quickicon"
                       id="quickicon" {{ $this->quickIcon ? 'checked="checked"' : '' }} />
            </div>
        </div>
	</div>

	<!-- This div contains dynamically generated user interface elements -->
	<div id="akeebagui">
	</div>

    <div class="akeeba-hidden-fields-container">
        <input type="hidden" name="task" value=""/>
        <input type="hidden" name="token" value="@token()"/>
    </div>

</form>
