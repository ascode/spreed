<?php
/** @var \OCP\IL10N $l */
/** @var array $_ */

vendor_script('select2/select2');
vendor_style('select2/select2');

style('spreed', 'style');
style('spreed', 'comments');
script(
	'spreed',
	[
		'vendor/backbone/backbone-min',
		'vendor/backbone.radio/build/backbone.radio.min',
		'vendor/backbone.marionette/lib/backbone.marionette.min',
		'models/message',
		'models/messagecollection',
		'models/room',
		'models/roomcollection',
		'views/chatview',
		'views/roomlistview',
		'simplewebrtc',
		'webrtc',
		'signaling',
		'calls',
		'app',
		'init',
	]
);
?>

<div id="notification-container">
	<div id="notification" style="display: none;"></div>
</div>
<div id="app" class="nc-enable-screensharing-extension" data-token="<?php p($_['token']) ?>">
	<div id="app-content" class="participants-1">

		<div id="app-sidebar" class="detailsView scroll-container hidden">
			<div class="detailCallInfoContainer">
				<h3><span class="room-name">Name</span></h3>
				<!--
				<h3>Call name <span class="icon icon-rename"></span></h3>

				<button><?php p($l->t('Start/stop webinary'));?></button>

				<input name="shareLink" id="shareLink" class="checkbox" value="1" type="checkbox">
				<label for="shareLink"><?php p($l->t('Share link'));?></label><br>
				<div class="oneline">
					<label for="linkText" class="hidden-visually">Link</label>
					<input id="linkText" class="linkText" type="text" readonly value="https://nextcloud13.local/index.php/s/LRDYjaFrAw2oBp7">
					<a class="clipboardButton icon icon-clippy" data-clipboard-target="#linkText" data-original-title="" title=""></a>
				</div>
				-->
			</div>

			<ul class="tabHeaders">
				<li class="tabHeader selected" data-tabid="participantTabView" data-tabindex="0">
					<a href="#"><?php p($l->t('Participants'));?></a>
				</li>
				<!--<li class="tabHeader" data-tabid="schedulingTabView" data-tabindex="1">
					<a href="#"><?php p($l->t('Scheduling'));?></a>
				</li>-->
			</ul>

			<div class="tabsContainer">
				<div id="participantTabView" class="tab participantTabView">
					<div class="participantListView subView">
						<ul id="participantWithList" class="participantWithList with-icon">
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div id="app-content-wrapper">
		<header>
			<div id="header" class="spreed-public">
				<div id="header-left">
					<a href="<?php print_unescaped(link_to('', 'index.php')); ?>" title="" id="nextcloud" target="_blank">
						<div class="logo-icon svg"></div>
					</a>
					<div class="header-appname-container">
						<h1 class="header-appname">
							<?php p($theme->getName()); ?>
						</h1>
					</div>
				</div>
				<div id="header-right">
					<div id="settings">
						<div id="guestName"><?php p($l->t('Guest')) ?></div>
						<input id="guestNameInput" class="hidden" type="text" maxlength="20" placeholder="<?php p($l->t('Guest')) ?>">
						<button id="guestNameConfirm" class="icon-confirm hidden"></button>
					</div>
				</div>
			</div>
		</header>

		<button id="video-fullscreen" class="icon-fullscreen-white public" data-placement="bottom" data-toggle="tooltip" data-original-title="<?php p($l->t('Fullscreen')) ?>"></button>

		<div id="video-speaking">

		</div>
		<div id="videos">
			<div class="videoView videoContainer hidden" id="localVideoContainer">
				<video id="localVideo"></video>
				<div class="avatar-container hidden">
					<div class="avatar"></div>
				</div>
				<div class="nameIndicator">
					<button id="mute" class="icon-audio-white" data-placement="top" data-toggle="tooltip" data-original-title="<?php p($l->t('Mute audio')) ?>"></button>
					<button id="hideVideo" class="icon-video-white" data-placement="top" data-toggle="tooltip" data-original-title="<?php p($l->t('Disable video')) ?>"></button>
					<button id="screensharing-button" class="app-navigation-entry-utils-menu-button icon-screen-off-white screensharing-disabled" data-placement="top" data-toggle="tooltip" data-original-title="<?php p($l->t('Share screen')) ?>"></button>
					<div id="screensharing-menu" class="app-navigation-entry-menu">
						<ul>
							<li>
								<button id="show-screen-button">
									<span class="icon-screen"></span>
									<span><?php p($l->t('Show your screen'));?></span>
								</button>
							</li>
							<li>
								<button id="stop-screen-button">
									<span class="icon-screen-off"></span>
									<span><?php p($l->t('Stop screensharing'));?></span>
								</button>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div id="screens"></div>

		<div id="emptycontent">
			<div id="emptycontent-icon" class="icon-video"></div>
			<h2><?php p($l->t('Looking great today! :)')) ?></h2>
			<p class="uploadmessage"><?php p($l->t('Smile in 3… 2… 1!')) ?></p>
		</div>
		</div>
	</div>
</div>
