<?php

/**
 *      [Discuz!] (C)2001-2099 Comsenz Inc.
 *      This is NOT a freeware, use is subject to license terms
 *
 *      $Id: lang_misc.php 33974 2013-09-10 09:30:47Z nemohou $
 *	Modified by Valery Votintsev, codersclub.org
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

$lang = array
(
	'discuz_lang' => 'misc',
	'contact' => 'Contact information:' ,
	'anonymous' => 'anonymous' ,
	'anonymoususer' => 'anonymoususer' ,
	'guestuser' => 'Guestuser ' ,
	'has_expired' => 'The information has expired' ,
	'click_view' => 'click to view' ,
	'never_expired' => 'never expire' ,
	'sort_update' => 'Update' ,
	'sort_upload' => 'Upload' ,
  	'view_noperm' => 'hide content' ,
	'post_hidden' => '**** This content is hidden by the author****' ,
	'post_banned' => '**** The author is banned or deleted automatically blocked ****' ,
	'post_single_banned' => '**** This post is blocked****' ,
	'message_ishidden_hiddenreplies' => 'This post is only visible to the author' ,
	'post_reply_quote' => '{author} posted at {time}' ,
	'post_edit' => "[i=s] This post was last edited by {editor} on {edittime}[/i]\n\n" ,
	'post_edit_regexp' => '/^\[i=s\] This post was last edited by .*? in .*? \[\/i\]\n\n/s' ,
	'post_edithtml' => '[i=s] This post was last edited by {editor} on {edittime}[/i]<br /><br />' ,
	'post_edithtml_regexp' => '/^\[i=s\] This post was last edited by .*? at.*? \[\/i\]<br \/><br \/>/s ' ,
	'post_editnobbcode' => '[This post was last edited by {editor} at {edittime}]\n\n' ,
	'post_editnobbcode_regexp' => '/^\[ This post was last edited by .*? in .*? \]\n\n/s' ,
	'post_reply' => 'reply' ,
	'post_thread' => 'The post' ,

	'price' => 'price' ,
	'pay_view' => 'Record' ,
	'attachment_buy' => 'buy' ,

	'post_trade_yuan' => '₹' ,
	'post_trade_seller' => 'seller' ,
	'post_trade_name' => 'trade name' ,
	'post_trade_price' => 'commodity price' ,
	'post_trade_quality' => 'Goods quality' ,
	'post_trade_locus' => 'location' ,
	'post_trade_transport_type' => 'Logistics method' ,
	'post_trade_transport_seller' => 'Seller bears the freight' ,
	'post_trade_transport_buyer' => 'The buyer bears the freight' ,
	'post_trade_transport_mail' => 'Surface Mail ' ,
	'post_trade_transport_express' => 'Express' ,
	'post_trade_transport_virtual' => 'Virtual goods or no postal delivery' ,
	'post_trade_transport_physical' => 'The buyer pays directly to the logistics company after receiving the goods' ,
	'post_trade_locus' => 'location' ,
	'post_trade_description' => 'Commodity description' ,
	'post_trade_pm_subject' => '[Bargaining]' ,
	'post_trade_pm_buynum' => 'Purchase quantity' ,
	'post_trade_pm_wishprice' => 'I expect the price is' ,
	'post_trade_pm_reason' => 'The reason for my bargaining is' ,
	'postappend_content' => 'Additional content' ,
	'payment_unit' => '₹',

	'attach' => 'attachment' ,
	'attach_pay' => 'charge attachment' ,
	'attach_credits_policy' => 'View credit policy description' ,
	'attach_img' => 'picture attachment' ,
	'attach_readperm' => 'reading permission' ,
	'attach_img_zoom' => 'Click to view the full image in a new window\\nCTRL+mouse wheel to zoom in or out' ,
	'attach_img_thumb' => 'Click to view the full image in a new window' ,
	'attach_downloads' => 'Number of downloads' ,

	'post_trade_transport' => 'Postage' ,
	'post_trade_transport_mail' => 'Surface Mail ' ,
	'post_trade_quality' => 'Goods quality' ,
	'post_trade_quality_new' => 'brand new' ,
	'post_trade_quality_secondhand' => 'secondhand' ,

	'trade_unstart' => '<font color="gray"> Unstarted transaction</font>' ,
	'trade_waitbuyerpay' => 'Waiting for buyer to pay' ,
	'trade_waitsellerconfirm' => 'Transaction has been created, waiting for seller’s confirmation' ,
	'trade_sysconfirmpay' => 'Confirm the buyer’s payment, do not ship temporarily' ,
	'trade_waitsellersend' => 'The buyer has paid and is waiting for the seller to deliver the goods' ,
	'trade_waitbuyerconfirm' => 'The seller has shipped the goods and the buyer is confirming' ,
	'trade_syspayseller' => 'The buyer confirms the receipt of the goods and waits for Alipay to send the payment to the seller' ,
	'trade_finished' => '<font color="green">The transaction ended successfully</font>' ,
	'trade_closed' => '<font color="gray">Closed midway through the transaction (not completed)</font>' ,
	'trade_waitselleragree'   => 'Waiting for the seller to agree to a refund' ,
	'trade_sellerrefusebuyer' => 'The seller rejects the buyer’s condition and waits for the buyer to modify the condition' ,
	'trade_waitbuyerreturn' => 'The seller agrees to a refund, waiting for the buyer to return the goods' ,
	'trade_waitsellerconfirmgoods' => 'Waiting for the seller to receive the goods' ,
	'trade_waitalipayrefund' => 'Both parties have agreed, waiting for Alipay to refund' ,
	'trade_alipaycheck' => 'Alipay is processing' ,
	'trade_overedrefund' => 'Ended refund' ,
	'trade_refundsuccess' => '<font color="green">Refund successful</font>' ,
	'trade_refundclosed' => '<font color="green">Refund closed</font>' ,

	'trade_offline_1' => 'Trading order is effective' ,
	'trade_offline_4' => 'I have paid and wait for the seller to deliver the goods' ,
	'trade_offline_5' => 'I have shipped' ,
	'trade_offline_7' => 'I received the goods and the transaction ended successfully' ,
	'trade_offline_8' => 'Cancel this transaction' ,
	'trade_offline_10' => 'I want to return the goods and wait for the seller to agree to the refund' ,
	'trade_offline_11' => 'Seller refuses to refund' ,
	'trade_offline_12' => 'Seller agrees to refund' ,
	'trade_offline_13' => 'I have returned the goods, waiting for the seller to receive the goods' ,
	'trade_offline_17' => 'The seller received a return and has been refunded' ,

	'trade_message_4' => 'You can enter the payment method, bank account number and other information' ,
	'trade_message_5' => 'You can enter the shipping company, invoice number and other information' ,
	'trade_message_13' => 'You can enter the shipping company, invoice number and other information' ,

	'credit_payment' => 'Points recharge' ,
	'credit_forum_payment' => 'Forum Points Recharge' ,
	'credit_forum_royalty' => 'Transaction fee' ,

	'credit_total' => 'Total points' ,

	'invite_payment' => 'Purchase invitation code' ,
	'invite_forum_payment' => 'Purchase invitation code' ,
	'invite_forum_payment_unit' => '₹',
	'invite_forum_royalty' => 'transaction fee' ,

	'formulaperm_regdate' => 'Registration time' ,
	'formulaperm_regday' => 'Registration days' ,
	'formulaperm_regip' => 'Registration IP' ,
	'formulaperm_lastip' => 'last login IP' ,
	'formulaperm_buyercredit' => 'buyer credit rating' ,
	'formulaperm_sellercredit' => 'seller credit evaluation' ,
	'formulaperm_digestposts' => 'Digest posts number' ,
	'formulaperm_posts' => 'Number of posts' ,
	'formulaperm_threads' => 'Number of topics' ,
	'formulaperm_oltime' => 'Online time (hours)' ,
	'formulaperm_pageviews' => 'page views' ,
	'formulaperm_and' => 'and' ,
	'formulaperm_or' => 'or' ,
	'formulaperm_extcredits' => 'Custom Credits' ,

	'login_normal_mode' => 'Online' ,
	'login_switch_invisible_mode' => 'Switch online state' ,
	'login_switch_normal_mode' => 'I want to go online' ,
	'login_invisible_mode' => 'invisible' ,

	'eccredit_explain' => 'explain' ,

	'modcp_logs_action_home' => 'Internal Message' ,
	'modcp_logs_action_moderate' => 'audit' ,
	'modcp_logs_action_member' => 'User Management' ,
	'modcp_logs_action_forumaccess' => 'User permissions' ,
	'modcp_logs_action_thread' => 'Theme management' ,
	'modcp_logs_action_forum' => 'Forum management' ,
	'modcp_logs_action_announcement' => 'announcement',
	'modcp_logs_action_log' => 'Management log' ,
	'modcp_logs_action_stat' => 'Management Statistics' ,

	'modcp_logs_action_login' => 'Login' ,

	'uch_selectalbum' => 'Please select an album' ,
	'uch_noalbum' => 'Sorry, you don’t have an album yet,' ,
	'click_here' => 'click here' ,
	'uch_createalbum' => 'Create your own album! ' ,

	'pm_from' => 'From' ,
	'pm_to' => 'Recipient' ,
	'pm_date' => 'date' ,

	'share_message' => 'Hello! I saw this post on {$_G[setting][bbname]} and thought it was very valuable and I recommend it to you. \\n\\n$thread[subject]\\naddress[url={$threadurl}]{$threadurl}[/url]\\n\\n hope you like it' ,

	'week_0' => 'Sunday' ,
	'week_1' => 'Monday' ,
	'week_2' => 'Tuesday' ,
	'week_3' => 'Wednesday' ,
	'week_4' => 'Thursday' ,
	'week_5' => 'Friday' ,
	'week_6' => 'Saturday' ,

	'y_m_d' => 'Y year m month d day' ,

	'notice_actor' => 'Waiting for $actorcount people' ,

	'perms_allowvisit' => 'Visit the forum' ,
	'perms_readaccess' => 'read access' ,
	'perms_allowviewpro' => 'View user profile' ,
	'perms_allowinvisible' => '隐身',
	'perms_allowsearch' => 'Use search' ,
	'perms_allownickname' => 'Use a nickname' ,
	'perms_allowcstatus' => 'Custom title' ,
	'perms_allowpost' => 'Post a new topic' ,
	'perms_allowreply' => 'Post a reply' ,
	'perms_allowpostpoll' => 'Initiate a poll' ,
	'perms_allowvote' => 'Participate in voting' ,
	'perms_allowpostreward' => 'Post a reward' ,
	'perms_allowpostactivity' => 'Post activity' ,
	'perms_allowpostdebate' => 'Post a debate' ,
	'perms_allowposttrade' => 'Post trade' ,
	'perms_maxsigsize' => 'Maximum signature length' ,
	'perms_allowsigbbcode' => 'Use editor code in signature' ,
	'perms_allowsigimgcode' => 'Use [img] code in signature' ,
	'perms_maxbiosize' => 'Maximum length of self-introduction' ,
	'perms_allowrecommend' => 'Theme evaluation impact value' ,
	'perms_allowbiobbcode' => 'Use editor code in self-introduction' ,
	'perms_allowbioimgcode' => 'Use [img] code in self-introduction' ,
	'perms_allowgetattach' => 'Download attachment' ,
	'perms_allowgetimage' => 'View image' ,
	'perms_allowpostattach' => 'Upload attachment' ,
	'perms_allowpostimage' => 'Upload image' ,
	'perms_allowsetattachperm' => 'Allow to set attachment permissions' ,
	'perms_maxspacesize' => 'space size' ,
	'perms_maxattachsize' => 'Single maximum attachment size' ,
	'perms_maxsizeperday' => 'Maximum total attachment size per day' ,
	'perms_maxattachnum' => 'Maximum number of attachments per day' ,
	'perms_allowbioimgcode' => 'Use [img] code in self-introduction' ,
	'perms_attachextensions' => 'attachment type' ,
	'perms_allowstickthread' => 'Topic on top' ,
	'perms_allowdigestthread' => 'Theme essence' ,
	'perms_allowstickthread_value' => '置顶',
	'perms_allowdigestthread_value' => 'Essence' ,
	'perms_allowbumpthread' => 'boost topic' ,
	'perms_allowhighlightthread' => 'Theme highlight' ,
	'perms_allowrecommendthread' => 'topic recommendation' ,
	'perms_allowstampthread' => 'topic identification' ,
	'perms_allowclosethread' => 'Theme is closed' ,
	'perms_allowmovethread' => 'Theme move' ,
	'perms_allowedittypethread' => 'Edit topic category' ,
	'perms_allowcopythread' => 'topic copy' ,
	'perms_allowmergethread' => 'topic merge' ,
	'perms_allowsplitthread' => 'topic split' ,
	'perms_allowrepairthread' => 'Theme repair' ,
	'perms_allowrefund' => 'Forced refund' ,
	'perms_alloweditpoll' => 'Edit Poll' ,
	'perms_allowremovereward' => 'Remove reward' ,
	'perms_alloweditactivity' => 'Management activities' ,
	'perms_allowedittrade' => 'Manage goods' ,
	'perms_alloweditpost' => 'Edit post' ,
	'perms_allowwarnpost' => 'Warning post' ,
	'perms_allowbanpost' => 'Block post' ,
	'perms_allowdelpost' => 'Delete post' ,
	'perms_allowviewreport' => 'View user report' ,
	'perms_allowmodpost' => 'review post' ,
	'perms_allowmoduser' => 'audit user' ,
	'perms_allowbanuser' => 'Forbidden user' ,
	'perms_allowbanip' => 'ban IP' ,
	'perms_allowedituser' => 'Edit user' ,
	'perms_allowmassprune' => 'Batch delete posts' ,
	'perms_allowpostannounce' => 'post announcement' ,
	'perms_disablepostctrl' => 'Posting is not restricted' ,
	'perms_allowviewip' => 'Allow viewing IP' ,
	'perms_viewperm' => 'View section' ,
	'perms_postperm' => 'Post a new topic' ,
	'perms_replyperm' => 'Post a reply' ,
	'perms_getattachperm' => 'Download attachment' ,
	'perms_postattachperm' => 'Upload attachment' ,
	'perms_postimageperm' => 'Upload image' ,
	'perms_allowblog' => 'Post a blog' ,
	'perms_allowdoing' => 'Post a record' ,
	'perms_allowupload' => 'Upload pictures' ,
	'perms_allowshare' => 'post share' ,
	'perms_allowpoke' => 'allow to say hello' ,
	'perms_allowfriend' => 'Allow friends to be added' ,
	'perms_allowclick' => 'Allow to express opinions ' ,
	'perms_allowmyop' => 'Allow the use of apps' ,
	'perms_allowcomment' => 'Post a message/comment' ,
	'perms_allowstatdata' => 'View statistics report' ,
	'perms_allowstat' => 'Allow viewing trend statistics' ,
	'perms_allowpostarticle' => 'Publish an article' ,
	'perms_raterange' => 'Allow participation in scoring' ,
	'perms_allowcommentpost' => 'Allow participation in comments' ,
	'perms_allowat' => 'Number of people allowed @' ,
	'perms_allowreplycredit' => 'allow to set up reply rewards' ,
	'perms_allowposttag' => 'Allow posttag ' ,
	'perms_allowcreatecollection' => 'The number of albums allowed to be created for collection' ,
	'perms_allowsendpm' => 'allow to send short messages ' ,
	'perms_maximagesize' => 'Maximum size of a single image' ,
	'perms_allowmediacode' => 'Allow the use of multimedia code' ,

	'join_topic' => 'join topic' ,
	'join_poll' => 'participate in voting' ,
	'buy_trade' => 'Buy goods' ,
	'join_reward' => 'participate in reward' ,
	'join_activity' => 'join activity' ,
	'join_debate' => 'join the debate' ,
	'at_invite' => '@我的朋友' ,

	'lower' => 'lower' ,
	'higher' => 'higher' ,
	'report_msg_your' => 'your' ,
	'report_noreward' => 'no reward or punishment' ,
	'activity_viewimg' => 'click to view' ,

	'crime_postreason' => '{reason}   <a href="forum.php?mod=redirect&goto=findpost&pid={pid}&ptid={tid}" target="_blank" class="xi2">
	see details</a>',
	'crime_reason' => '{reason}',

	'connectguest_message_search' => array ( 'Not logged in yet' , 'Log in first' ),
	'connectguest_message_replace' => array ( 'Not yet <a href="member.php?mod=connect" class="xi2">complete account information</a> or <a href="member.php?mod=connect&ac=bind "class="xi2">bind an existing account</a> ' , 'First <a href="member.php?mod=connect" class="xi2">complete account information</a> or <a href ="member.php?mod=connect&ac=bind" class="xi2">bind an existing account</a> ' ),
	'connectguest_message_mobile_search' => array ( 'Not logged in yet' , 'Log in first' ),
	'connectguest_message_mobile_replace' => 'Complete information on the computer version or bind an existing account,' ,

	'avatar' => 'avatar' ,
	'signature' => 'signature' ,
	'custom_title' => 'Custom title' ,

	'forum_guide' => 'guide reading' ,

	'patch_site_have' => 'Your website has' ,
	'patch_is_fixed' => 'A security hole has been fixed' ,
	'patch_need_fix' => 'A security hole, please fix it as soon as possible' ,
	'patch_fixed_status' => 'fixed' ,
	'patch_unfix_status' => 'unfixed ' ,
	'patch_fix_failed_status' => 'Repair failed' ,
	'patch_fix_right_now' => 'Fix now' ,
	'patch_view_fix_detail' => 'View details' ,
	'patch_name' => 'vulnerability name' ,
	'patch_dateline' => 'Publish Date' ,
	'patch_status' => 'Current status' ,
	'patch_close' => 'Close' ,

	'plugin_title' => 'App update reminder' ,
	'plugin_memo' => 'You have available updates for <span class="xi1">{number}</span> apps' ,
	'plugin_link' => 'Update now' ,

	'seccode' => 'Verification code' ,
	'seccode_update' => 'Change another' ,
	'seccode_player' => '<span style="padding:2px"><img border="0" style="vertical-align:middle" src="static/image/common/seccodeplayer.gif" /> <a href="javascript:;" id="seccodeplay_{idhash}">
	Play verification code</a></span>',
	'secqaa' => 'Verification Q&A' ,

	'mobileoem_creditrule' => 'Mobileoem_creditrule ' ,

// Added by Valery Votintsev, codersclub.org
	'poll_reply_no_perms' 	=> 'You can not vote on your own replies' , //'You can not reply the poll',
	'poll_replyed_already' 	=> 'You have already voted for this reply' , //'You have already replied this poll',
	'poll_voted_ok' 		=> 'Voted successfully' , //'You have voted successfully',
);

