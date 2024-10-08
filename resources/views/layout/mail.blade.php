@extends('inc.main')
@section('content')

<div class="layout-px-spacing">
    <div class="row layout-top-spacing">
        <div class="col-xl-12 col-lg-12 col-md-12">

            <div class="row">

                <div class="col-xl-12  col-md-12">

                    <div class="mail-box-container">
                        <div class="mail-overlay"></div>

                        <div class="tab-title">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-12 text-center mail-btn-container">
                                    <a id="btn-compose-mail" class="btn btn-block" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></a>
                                </div>
                                <div class="col-md-12 col-sm-12 col-12 mail-categories-container">

                                    <div class="mail-sidebar-scroll">

                                        <ul class="nav nav-pills d-block" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link list-actions" id="mailInbox"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg> <span class="nav-names">Replied Request</span> <span class="mail-badge badge"></span></a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link list-actions" id="sentmail"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send"><line x1="22" y1="2" x2="11" y2="13"></line><polygon points="22 2 15 22 11 13 2 9 22 2"></polygon></svg> <span class="nav-names"> Sent Request</span></a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="mailbox-inbox" class="accordion mailbox-inbox">

                            <div class="search">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu mail-menu d-lg-none"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                                <input type="text" class="form-control input-search" placeholder="Search Here...">
                            </div>

                            <div class="action-center">
                                <div class="">
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox checkbox-primary">
                                          <input type="checkbox" class="new-control-input" id="inboxAll">
                                          <span class="new-control-indicator"></span><span>Check All</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="">
                                    <a class="nav-link dropdown-toggle d-icon label-group" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" data-toggle="tooltip" data-placement="top" data-original-title="Label" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg></a>
                                    <div class="dropdown d-inline-block more-actions">
                                        <a class="nav-link dropdown-toggle" id="more-actions-btns-dropdown" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical"><circle cx="12" cy="12" r="1"></circle><circle cx="12" cy="5" r="1"></circle><circle cx="12" cy="19" r="1"></circle></svg>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="more-actions-btns-dropdown">
                                            <a class="dropdown-item action-mark_as_read" href="javascript:void(0);">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book-open"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg> Mark as Read
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="message-box">

                                <div class="message-box-scroll" id="ct">

                                    <div class="mail-item sentmail">
                                        <div class="animated animatedFadeInUp fadeInUp" id="mailHeadingTwo">
                                            <div class="mb-0">
                                                <div class="mail-item-heading work collapsed"  data-toggle="collapse" role="navigation" data-target="#mailCollapseTwo" aria-expanded="false">
                                                    <div class="mail-item-inner">

                                                        <div class="d-flex">
                                                            <div class="n-chk text-center">
                                                                <label class="new-control new-checkbox checkbox-primary">
                                                                  <input type="checkbox" class="new-control-input inbox-chkbox">
                                                                  <span class="new-control-indicator"></span>
                                                                </label>
                                                            </div>
                                                            <div class="f-body">
                                                                <div class="meta-mail-time">
                                                                    <p class="user-email" data-mailTo="alan@mail.com">Alan</p>
                                                                </div>
                                                                <div class="meta-title-tag">
                                                                    <p class="mail-content-excerpt" data-mailDescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'><span class="mail-title" data-mailTitle="Mozilla Update">Mozilla Update - </span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.</p>
                                                                    <div class="tags">
                                                                        <span class="g-dot-primary"></span>
                                                                        <span class="g-dot-warning"></span>
                                                                        <span class="g-dot-success"></span>
                                                                        <span class="g-dot-danger"></span>
                                                                    </div>
                                                                    <p class="meta-time align-self-center">8:45 AM</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="unread-promotion-page" class="mail-item mailInbox">
                                        <div class="animated animatedFadeInUp fadeInUp" id="mailHeadingThree">
                                            <div class="mb-0">
                                                <div class="mail-item-heading social collapsed"  data-toggle="collapse" role="navigation" data-target="#mailCollapseThree" aria-expanded="false">
                                                    <div class="mail-item-inner">

                                                        <div class="d-flex">
                                                            <div class="n-chk text-center">
                                                                <label class="new-control new-checkbox checkbox-primary">
                                                                  <input type="checkbox" class="new-control-input inbox-chkbox">
                                                                  <span class="new-control-indicator"></span>
                                                                </label>
                                                            </div>
                                                            <div class="f-head">
                                                                <img src="assets/img/90x90.jpg" class="user-profile" alt="avatar">
                                                            </div>
                                                            <div class="f-body">
                                                                <div class="meta-mail-time">
                                                                    <p class="user-email" data-mailTo="laurieFox@mail.com">Laurie Fox</p>
                                                                </div>
                                                                <div class="meta-title-tag">
                                                                    <p class="mail-content-excerpt" data-mailDescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-paperclip attachment-indicator"><path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"></path></svg><span class="mail-title" data-mailTitle="Promotion Page">Promotion Page - </span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.
                                                                    </p>
                                                                    <div class="tags">
                                                                        <span class="g-dot-primary"></span>
                                                                        <span class="g-dot-warning"></span>
                                                                        <span class="g-dot-success"></span>
                                                                        <span class="g-dot-danger"></span>
                                                                    </div>
                                                                    <p class="meta-time align-self-center">2:00 PM</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="attachments">
                                                        <span class="">Confirm File.txt</span>
                                                        <span class="">Important Docs.xml</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mail-item mailInbox">
                                        <div class="animated animatedFadeInUp fadeInUp" id="mailHeadingFive">
                                            <div class="mb-0">
                                                <div class="mail-item-heading collapsed"  data-toggle="collapse" role="navigation" data-target="#mailCollapseFive" aria-expanded="false">
                                                    <div class="mail-item-inner">

                                                        <div class="d-flex">
                                                            <div class="n-chk text-center">
                                                                <label class="new-control new-checkbox checkbox-primary">
                                                                  <input type="checkbox" class="new-control-input inbox-chkbox">
                                                                  <span class="new-control-indicator"></span>
                                                                </label>
                                                            </div>
                                                            <div class="f-head">
                                                                <img src="assets/img/90x90.jpg" class="user-profile" alt="avatar">
                                                            </div>
                                                            <div class="f-body">
                                                                <div class="meta-mail-time">
                                                                    <p class="user-email" data-mailTo="kingAndy@mail.com">Andy King</p>
                                                                </div>
                                                                <div class="meta-title-tag">
                                                                    <p class="mail-content-excerpt" data-mailDescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'><span class="mail-title" data-mailTitle="Hosting Payment Reminder">Hosting Payment Reminder -</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.</p>
                                                                    <div class="tags">
                                                                        <span class="g-dot-primary"></span>
                                                                        <span class="g-dot-warning"></span>
                                                                        <span class="g-dot-success"></span>
                                                                        <span class="g-dot-danger"></span>
                                                                    </div>
                                                                    <p class="meta-time align-self-center">6:28 PM</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="unread-verification-link" class="mail-item mailInbox">
                                        <div class="animated animatedFadeInUp fadeInUp" id="mailHeadingEleven">
                                            <div class="mb-0">
                                                <div class="mail-item-heading social collapsed"  data-toggle="collapse" role="navigation" data-target="#mailCollapseEleven" aria-expanded="false">
                                                    <div class="mail-item-inner">

                                                        <div class="d-flex">
                                                            <div class="n-chk text-center">
                                                                <label class="new-control new-checkbox checkbox-primary">
                                                                  <input type="checkbox" class="new-control-input inbox-chkbox">
                                                                  <span class="new-control-indicator"></span>
                                                                </label>
                                                            </div>
                                                            <div class="f-head">
                                                                <div class="avatar avatar-sm">
                                                                    <span class="avatar-title rounded-circle">KB</span>
                                                                </div>
                                                            </div>
                                                            <div class="f-body">
                                                                <div class="meta-mail-time">
                                                                    <p class="user-email" data-mailTo="kirsten.beck@mail.com">Kristen Beck</p>
                                                                </div>
                                                                <div class="meta-title-tag">
                                                                    <p class="mail-content-excerpt" data-mailDescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'><span class="mail-title" data-mailTitle="Verification Link">Verification Link - </span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.</p>
                                                                    <div class="tags">
                                                                        <span class="g-dot-primary"></span>
                                                                        <span class="g-dot-warning"></span>
                                                                        <span class="g-dot-success"></span>
                                                                        <span class="g-dot-danger"></span>
                                                                    </div>
                                                                    <p class="meta-time align-self-center">8 Dec</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mail-item mailInbox">
                                        <div class="animated animatedFadeInUp fadeInUp" id="mailHeadingTwelve">
                                            <div class="mb-0">
                                                <div class="mail-item-heading private collapsed"  data-toggle="collapse" role="navigation" data-target="#mailCollapseTwelve" aria-expanded="false">
                                                    <div class="mail-item-inner">

                                                        <div class="d-flex">
                                                            <div class="n-chk text-center">
                                                                <label class="new-control new-checkbox checkbox-primary">
                                                                  <input type="checkbox" class="new-control-input inbox-chkbox">
                                                                  <span class="new-control-indicator"></span>
                                                                </label>
                                                            </div>
                                                            <div class="f-head">
                                                                <img src="assets/img/90x90.jpg" class="user-profile" alt="avatar">
                                                            </div>
                                                            <div class="f-body">
                                                                <div class="meta-mail-time">
                                                                    <p class="user-email" data-mailTo="christian@mail.com">Christian</p>
                                                                </div>
                                                                <div class="meta-title-tag">
                                                                    <p class="mail-content-excerpt" data-mailDescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-paperclip attachment-indicator"><path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"></path></svg><span class="mail-title" data-mailTitle="New Updates">New Updates - </span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.</p>
                                                                    <div class="tags">
                                                                        <span class="g-dot-primary"></span>
                                                                        <span class="g-dot-warning"></span>
                                                                        <span class="g-dot-success"></span>
                                                                        <span class="g-dot-danger"></span>
                                                                    </div>
                                                                    <p class="meta-time align-self-center">30 Nov</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="attachments">
                                                        <span class="">update.zip</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="unread-schedular-alert" class="mail-item mailInbox">
                                        <div class="animated animatedFadeInUp fadeInUp" id="mailHeadingThirteen">
                                            <div class="mb-0">
                                                <div class="mail-item-heading personal collapsed"  data-toggle="collapse" role="navigation" data-target="#mailCollapseThirteen" aria-expanded="false">
                                                    <div class="mail-item-inner">

                                                        <div class="d-flex">
                                                            <div class="n-chk text-center">
                                                                <label class="new-control new-checkbox checkbox-primary">
                                                                  <input type="checkbox" class="new-control-input inbox-chkbox">
                                                                  <span class="new-control-indicator"></span>
                                                                </label>
                                                            </div>
                                                            <div class="f-head">
                                                                <img src="assets/img/90x90.jpg" class="user-profile" alt="avatar">
                                                            </div>
                                                            <div class="f-body">
                                                                <div class="meta-mail-time">
                                                                    <p class="user-email" data-mailTo="roxanne@mail.com">Roxanne</p>
                                                                </div>
                                                                <div class="meta-title-tag">
                                                                    <p class="mail-content-excerpt" data-mailDescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'><span class="mail-title" data-mailTitle="Schedular Alert">Schedular Alert - </span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.</p>
                                                                    <div class="tags">
                                                                        <span class="g-dot-primary"></span>
                                                                        <span class="g-dot-warning"></span>
                                                                        <span class="g-dot-success"></span>
                                                                        <span class="g-dot-danger"></span>
                                                                    </div>
                                                                    <p class="meta-time align-self-center">15 Nov</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mail-item sentmail">
                                        <div class="animated animatedFadeInUp fadeInUp" id="mailHeadingSix">
                                            <div class="mb-0">
                                                <div class="mail-item-heading collapsed"  data-toggle="collapse" role="navigation" data-target="#mailCollapseSix" aria-expanded="false">
                                                    <div class="mail-item-inner">

                                                        <div class="d-flex">
                                                            <div class="n-chk text-center">
                                                                <label class="new-control new-checkbox checkbox-primary">
                                                                  <input type="checkbox" class="new-control-input inbox-chkbox">
                                                                  <span class="new-control-indicator"></span>
                                                                </label>
                                                            </div>
                                                            <div class="f-body">
                                                                <div class="meta-mail-time">
                                                                    <p class="user-email" data-mailTo="justincross@mail.com">Justin Cross</p>
                                                                </div>
                                                                <div class="meta-title-tag">
                                                                    <p class="mail-content-excerpt" data-mailDescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'><span class="mail-title" data-mailTitle="App Project Checklist">App Project Checklist - </span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.</p>
                                                                    <div class="tags">
                                                                        <span class="g-dot-primary"></span>
                                                                        <span class="g-dot-warning"></span>
                                                                        <span class="g-dot-success"></span>
                                                                        <span class="g-dot-danger"></span>
                                                                    </div>
                                                                    <p class="meta-time align-self-center">3:10 PM</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="unread-verification-link-new" class="mail-item mailInbox">
                                        <div class="animated animatedFadeInUp fadeInUp" id="mailHeadingSixteen">
                                            <div class="mb-0">
                                                <div class="mail-item-heading personal collapsed"  data-toggle="collapse" role="navigation" data-target="#mailCollapseSixteen" aria-expanded="false">
                                                    <div class="mail-item-inner">

                                                        <div class="d-flex">
                                                            <div class="n-chk text-center">
                                                                <label class="new-control new-checkbox checkbox-primary">
                                                                  <input type="checkbox" class="new-control-input inbox-chkbox">
                                                                  <span class="new-control-indicator"></span>
                                                                </label>
                                                            </div>
                                                            <div class="f-head">
                                                                <div class="avatar avatar-sm">
                                                                    <span class="avatar-title rounded-circle">NI</span>
                                                                </div>
                                                            </div>
                                                            <div class="f-body">
                                                                <div class="meta-mail-time">
                                                                    <p class="user-email" data-mailTo="npminc@mail.com">NPM Inc</p>
                                                                </div>
                                                                <div class="meta-title-tag">
                                                                    <p class="mail-content-excerpt" data-mailDescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-paperclip attachment-indicator"><path d="M21.44 11.05l-9.19 9.19a6 6 0 0 1-8.49-8.49l9.19-9.19a4 4 0 0 1 5.66 5.66l-9.2 9.19a2 2 0 0 1-2.83-2.83l8.49-8.48"></path></svg><span class="mail-title" data-mailTitle="npm Inc">npm Inc - </span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.</p>
                                                                    <div class="tags">
                                                                        <span class="g-dot-primary"></span>
                                                                        <span class="g-dot-warning"></span>
                                                                        <span class="g-dot-success"></span>
                                                                        <span class="g-dot-danger"></span>
                                                                    </div>
                                                                    <p class="meta-time align-self-center">12/15/2018</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="attachments">
                                                        <span class="">package.zip</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mail-item mailInbox spam">
                                        <div class="animated animatedFadeInUp fadeInUp" id="mailHeadingSeventeen">
                                            <div class="mb-0">
                                                <div class="mail-item-heading personal collapsed"  data-toggle="collapse" role="navigation" data-target="#mailCollapseSeventeen" aria-expanded="false">
                                                    <div class="mail-item-inner">

                                                        <div class="d-flex">
                                                            <div class="n-chk text-center">
                                                                <label class="new-control new-checkbox checkbox-primary">
                                                                  <input type="checkbox" class="new-control-input inbox-chkbox">
                                                                  <span class="new-control-indicator"></span>
                                                                </label>
                                                            </div>
                                                            <div class="f-head">
                                                                <img src="assets/img/90x90.jpg" class="user-profile" alt="avatar">
                                                            </div>
                                                            <div class="f-body">
                                                                <div class="meta-mail-time">
                                                                    <p class="user-email" data-mailTo="marleneWood@mail.com">Marlene Wood</p>
                                                                </div>
                                                                <div class="meta-title-tag">
                                                                    <p class="mail-content-excerpt" data-mailDescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'><span class="mail-title" data-mailTitle="eBill">eBill - </span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.</p>
                                                                    <div class="tags">
                                                                        <span class="g-dot-primary"></span>
                                                                        <span class="g-dot-warning"></span>
                                                                        <span class="g-dot-success"></span>
                                                                        <span class="g-dot-danger"></span>
                                                                    </div>
                                                                    <p class="meta-time align-self-center">11/25/2018</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="content-box">
                                <div class="d-flex msg-close">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left close-message"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                                    <h2 class="mail-title" data-selectedMailTitle=""></h2>
                                </div>

                                <div id="mailCollapseTwo" class="collapse" aria-labelledby="mailHeadingTwo" data-parent="#mailbox-inbox">
                                    <div class="mail-content-container sentmail" data-mailfrom="info@mail.com" data-mailto="alan@mail.com" data-mailcc="">

                                        <div class="d-flex justify-content-between mb-3">
                                            <div class="d-flex user-info">
                                                <div class="f-body">
                                                    <div class="meta-mail-time">
                                                        <div class="">
                                                            <p class="user-email" data-mailto="alan@mail.com"><span>To,</span> alan@mail.com</p>
                                                        </div>
                                                        <p class="mail-content-meta-date current-recent-mail">12/14/2020 -</p>
                                                        <p class="meta-time align-self-center">8:45 AM</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="action-btns">
                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Reply">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left reply"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                </a>
                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Forward">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-right forward"><polyline points="15 14 20 9 15 4"></polyline><path d="M4 20v-7a4 4 0 0 1 4-4h12"></path></svg>
                                                </a>
                                            </div>
                                        </div>
                                        <p class="mail-content" data-mailTitle="Mozilla Update" data-maildescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>

                                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>

                                        <p>Best Regards,</p>
                                        <p>Shaun Park</p>

                                        <div class="attachments">
                                            <h6 class="attachments-section-title">Attachments</h6>
                                            <div class="attachment file-pdf">
                                                <div class="media">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                                    <div class="media-body">
                                                        <p class="file-name">Confirm File</p>
                                                        <p class="file-size">450kb</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="attachment file-folder">
                                                <div class="media">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>
                                                    <div class="media-body">
                                                        <p class="file-name">Important Docs</p>
                                                        <p class="file-size">2.1MB</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="attachment file-img">
                                                <div class="media">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                                                    <div class="media-body">
                                                        <p class="file-name">Photo.png</p>
                                                        <p class="file-size">50kb</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div id="mailCollapseThree" class="collapse" aria-labelledby="mailHeadingThree" data-parent="#mailbox-inbox">
                                    <div class="mail-content-container mailInbox" data-mailfrom="info@mail.com" data-mailto="linda@mail.com" data-mailcc="">

                                        <div class="d-flex justify-content-between">

                                            <div class="d-flex user-info">
                                                <div class="f-head">
                                                    <img src="assets/img/90x90.jpg" class="user-profile" alt="avatar">
                                                </div>
                                                <div class="f-body">
                                                    <div class="meta-title-tag">
                                                        <h4 class="mail-usr-name" data-mailtitle="Promotion Page">Laurie Fox</h4>
                                                    </div>
                                                    <div class="meta-mail-time">
                                                        <p class="user-email" data-mailto="laurieFox@mail.com">laurieFox@mail.com</p>
                                                        <p class="mail-content-meta-date current-recent-mail">12/14/2020 -</p>
                                                        <p class="meta-time align-self-center">2:00 PM</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="action-btns">
                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Reply">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left reply"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                </a>
                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Forward">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-right forward"><polyline points="15 14 20 9 15 4"></polyline><path d="M4 20v-7a4 4 0 0 1 4-4h12"></path></svg>
                                                </a>
                                            </div>
                                        </div>

                                        <p class="mail-content" data-mailTitle="Promotion Page" data-maildescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>

                                        <div class="gallery text-center">
                                            <img alt="image-gallery" src="assets/img/350x250.jpg" class="img-fluid mb-4 mt-4" style="width: 250px; height: 180px;">
                                            <img alt="image-gallery" src="assets/img/350x250.jpg" class="img-fluid mb-4 mt-4" style="width: 250px; height: 180px;">
                                            <img alt="image-gallery" src="assets/img/350x250.jpg" class="img-fluid mb-4 mt-4" style="width: 250px; height: 180px;">
                                        </div>

                                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>

                                        <p>Best Regards,</p>
                                        <p>Laurie Fox</p>


                                        <div class="attachments">
                                            <h6 class="attachments-section-title">Attachments</h6>
                                            <div class="attachment file-pdf">
                                                <div class="media">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                                    <div class="media-body">
                                                        <p class="file-name">Confirm File.txt</p>
                                                        <p class="file-size">450kb</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="attachment file-folder">
                                                <div class="media">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                                    <div class="media-body">
                                                        <p class="file-name">Important Docs.xml</p>
                                                        <p class="file-size">2.1MB</p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                <div id="mailCollapseFive" class="collapse" aria-labelledby="mailHeadingFive" data-parent="#mailbox-inbox">
                                    <div class="mail-content-container mailInbox" data-mailfrom="info@mail.com" data-mailto="kingAndy@mail.com" data-mailcc="">

                                        <div class="d-flex justify-content-between mb-5">
                                            <div class="d-flex user-info">
                                                <div class="f-head">
                                                    <img src="assets/img/90x90.jpg" class="user-profile" alt="avatar">
                                                </div>
                                                <div class="f-body">
                                                    <div class="meta-title-tag">
                                                        <h4 class="mail-usr-name" data-mailtitle="Hosting Payment Reminder">Andy King</h4>
                                                    </div>
                                                    <div class="meta-mail-time">
                                                        <p class="user-email" data-mailto="kingAndy@mail.com">kingAndy@mail.com</p>
                                                        <p class="mail-content-meta-date current-recent-mail">12/14/2020 -</p>
                                                        <p class="meta-time align-self-center">6:28 PM</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="action-btns">
                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Reply">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left reply"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                </a>
                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Forward">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-right forward"><polyline points="15 14 20 9 15 4"></polyline><path d="M4 20v-7a4 4 0 0 1 4-4h12"></path></svg>
                                                </a>
                                            </div>
                                        </div>

                                        <p class="mail-content" data-mailTitle="Hosting Payment Reminder" data-maildescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>

                                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>

                                        <p>Best Regards,</p>
                                        <p>Andy King</p>

                                    </div>
                                </div>

                                <div id="mailCollapseEleven" class="collapse" aria-labelledby="mailHeadingEleven" data-parent="#mailbox-inbox">
                                    <div class="mail-content-container mailInbox" data-mailfrom="info@mail.com" data-mailto="kirsten.beck@mail.com" data-mailcc="">

                                        <div class="d-flex justify-content-between mb-5">
                                            <div class="d-flex user-info">
                                                <div class="f-head">
                                                    <div class="avatar avatar-sm">
                                                        <span class="avatar-title rounded-circle">KB</span>
                                                    </div>
                                                </div>
                                                <div class="f-body">
                                                    <div class="meta-title-tag">
                                                        <h4 class="mail-usr-name" data-mailtitle="Verification Link">Kirsten Beck</h4>
                                                    </div>
                                                    <div class="meta-mail-time">
                                                        <p class="user-email" data-mailto="kirsten.beck@mail.com">kirsten.beck@mail.com</p>
                                                        <p class="mail-content-meta-date">12/08/2020 -</p>
                                                        <p class="meta-time align-self-center">11:09 AM</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="action-btns">
                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Reply">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left reply"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                </a>
                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Forward">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-right forward"><polyline points="15 14 20 9 15 4"></polyline><path d="M4 20v-7a4 4 0 0 1 4-4h12"></path></svg>
                                                </a>
                                            </div>
                                        </div>

                                        <p class="mail-content" data-mailTitle="Verification Link" data-maildescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>

                                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>

                                        <p>Best Regards,</p>
                                        <p>Kirsten Beck</p>

                                    </div>
                                </div>

                                <div id="mailCollapseTwelve" class="collapse" aria-labelledby="mailHeadingTwelve" data-parent="#mailbox-inbox">
                                    <div class="mail-content-container mailInbox" data-mailfrom="info@mail.com" data-mailto="christian@mail.com" data-mailcc="">

                                        <div class="d-flex justify-content-between mb-5">
                                            <div class="d-flex user-info">
                                                <div class="f-head">
                                                    <img src="assets/img/90x90.jpg" class="user-profile" alt="avatar">
                                                </div>
                                                <div class="f-body">
                                                    <div class="meta-title-tag">
                                                        <h4 class="mail-usr-name" data-mailtitle="New Updates">Christian</h4>
                                                    </div>
                                                    <div class="meta-mail-time">
                                                        <p class="user-email" data-mailto="christian@mail.com">christian@mail.com</p>
                                                        <p class="mail-content-meta-date">11/30/2020 -</p>
                                                        <p class="meta-time align-self-center">2:00 PM</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="action-btns">
                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Reply">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left reply"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                </a>
                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Forward">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-right forward"><polyline points="15 14 20 9 15 4"></polyline><path d="M4 20v-7a4 4 0 0 1 4-4h12"></path></svg>
                                                </a>
                                            </div>
                                        </div>

                                        <p class="mail-content" data-mailTitle="New Updates" data-maildescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>

                                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>

                                        <p>Best Regards,</p>
                                        <p>Christian</p>


                                        <div class="attachments">
                                            <h6 class="attachments-section-title">Attachments</h6>
                                            <div class="attachment file-pdf">
                                                <div class="media">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-package"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                                    <div class="media-body">
                                                        <p class="file-name">update.zip</p>
                                                        <p class="file-size">1.3MB</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div id="mailCollapseThirteen" class="collapse" aria-labelledby="mailHeadingThirteen" data-parent="#mailbox-inbox">
                                    <div class="mail-content-container mailInbox" data-mailfrom="info@mail.com" data-mailto="roxanne@mail.com" data-mailcc="">

                                        <div class="d-flex justify-content-between mb-5">
                                            <div class="d-flex user-info">
                                                <div class="f-head">
                                                    <img src="assets/img/90x90.jpg" class="user-profile" alt="avatar">
                                                </div>
                                                <div class="f-body">
                                                    <div class="meta-title-tag">
                                                        <h4 class="mail-usr-name" data-mailtitle="Schedular Alert">Roxanne</h4>
                                                    </div>
                                                    <div class="meta-mail-time">
                                                        <p class="user-email" data-mailto="roxanne@mail.com">roxanne@mail.com</p>
                                                        <p class="mail-content-meta-date">11/15/2020 -</p>
                                                        <p class="meta-time align-self-center">2:00 PM</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="action-btns">
                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Reply">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left reply"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                </a>
                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Forward">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-right forward"><polyline points="15 14 20 9 15 4"></polyline><path d="M4 20v-7a4 4 0 0 1 4-4h12"></path></svg>
                                                </a>
                                            </div>
                                        </div>

                                        <p class="mail-content" data-mailTitle="Schedular Alert" data-maildescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>

                                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>

                                        <p>Best Regards,</p>
                                        <p>Roxanne</p>

                                    </div>
                                </div>

                                <div id="mailCollapseFourteen" class="collapse" aria-labelledby="mailHeadingFourteen" data-parent="#mailbox-inbox">
                                    <div class="mail-content-container mailInbox" data-mailfrom="info@mail.com" data-mailto="reevesErnest@mail.com" data-mailcc="">

                                        <div class="d-flex justify-content-between mb-5">
                                            <div class="d-flex user-info">
                                                <div class="f-head">
                                                    <div class="avatar avatar-sm">
                                                        <span class="avatar-title rounded-circle">E</span>
                                                    </div>
                                                </div>
                                                <div class="f-body">
                                                    <div class="meta-title-tag">
                                                        <h4 class="mail-usr-name" data-mailtitle="Youtube">Youtube</h4>
                                                    </div>
                                                    <div class="meta-mail-time">
                                                        <p class="user-email" data-mailto="reevesErnest@mail.com">reevesErnest@mail.com</p>
                                                        <p class="mail-content-meta-date">06/02/2020 -</p>
                                                        <p class="meta-time align-self-center">8:25 PM</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="action-btns">
                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Reply">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left reply"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                </a>
                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Forward">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-right forward"><polyline points="15 14 20 9 15 4"></polyline><path d="M4 20v-7a4 4 0 0 1 4-4h12"></path></svg>
                                                </a>
                                            </div>
                                        </div>

                                        <p class="mail-content" data-mailTitle="Youtube" data-maildescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>

                                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>

                                        <p>Best Regards,</p>
                                        <p>Ernest Reeves</p>

                                    </div>
                                </div>

                                <div id="mailCollapseFifteen" class="collapse" aria-labelledby="mailHeadingFifteen" data-parent="#mailbox-inbox">
                                    <div class="mail-content-container mailInbox" data-mailfrom="info@mail.com" data-mailto="infocompany@mail.com" data-mailcc="">

                                        <div class="d-flex justify-content-between mb-5">
                                            <div class="d-flex user-info">
                                                <div class="f-head">
                                                    <img src="assets/img/90x90.jpg" class="user-profile" alt="avatar">
                                                </div>
                                                <div class="f-body">
                                                    <div class="meta-title-tag">
                                                        <h4 class="mail-usr-name" data-mailtitle="50% Discount">Info Company</h4>
                                                    </div>
                                                    <div class="meta-mail-time">
                                                        <p class="user-email" data-mailto="infocompany@mail.com">infocompany@mail.com</p>
                                                        <p class="mail-content-meta-date">02/10/2020 -</p>
                                                        <p class="meta-time align-self-center">7:00 PM</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="action-btns">
                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Reply">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left reply"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                </a>
                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Forward">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-right forward"><polyline points="15 14 20 9 15 4"></polyline><path d="M4 20v-7a4 4 0 0 1 4-4h12"></path></svg>
                                                </a>
                                            </div>
                                        </div>

                                        <p class="mail-content" data-mailTitle="50% Discount" data-maildescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>

                                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>

                                        <p>Best Regards,</p>
                                        <p>Info Company</p>

                                    </div>
                                </div>

                                <div id="mailCollapseSixteen" class="collapse" aria-labelledby="mailHeadingSixteen" data-parent="#mailbox-inbox">
                                    <div class="mail-content-container mailInbox" data-mailfrom="info@mail.com" data-mailto="npminc@mail.com" data-mailcc="">

                                        <div class="d-flex justify-content-between mb-5">
                                            <div class="d-flex user-info">
                                                <div class="f-head">
                                                    <div class="avatar avatar-sm">
                                                        <span class="avatar-title rounded-circle">NI</span>
                                                    </div>
                                                </div>
                                                <div class="f-body">
                                                    <div class="meta-title-tag">
                                                        <h4 class="mail-usr-name" data-mailtitle="npm Inc">npm Inc</h4>
                                                    </div>
                                                    <div class="meta-mail-time">
                                                        <p class="user-email" data-mailto="npminc@mail.com">npminc@mail.com</p>
                                                        <p class="mail-content-meta-date">12/15/2018 -</p>
                                                        <p class="meta-time align-self-center">8:37 AM</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="action-btns">
                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Reply">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left reply"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                </a>
                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Forward">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-right forward"><polyline points="15 14 20 9 15 4"></polyline><path d="M4 20v-7a4 4 0 0 1 4-4h12"></path></svg>
                                                </a>
                                            </div>
                                        </div>

                                        <p class="mail-content" data-mailTitle="npm Inc" data-maildescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>

                                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>

                                        <p>Best Regards,</p>
                                        <p>Info Company</p>


                                        <div class="attachments">
                                            <h6 class="attachments-section-title">Attachments</h6>
                                            <div class="attachment file-pdf">
                                                <div class="media">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-package"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                                    <div class="media-body">
                                                        <p class="file-name">package.zip</p>
                                                        <p class="file-size">450kb</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div id="mailCollapseSeventeen" class="collapse" aria-labelledby="mailHeadingSeventeen" data-parent="#mailbox-inbox">
                                    <div class="mail-content-container mailInbox" data-mailfrom="info@mail.com" data-mailto="infocompany@mail.com" data-mailcc="">

                                        <div class="d-flex justify-content-between mb-5">
                                            <div class="d-flex user-info">
                                                <div class="f-head">
                                                    <img src="assets/img/90x90.jpg" class="user-profile" alt="avatar">
                                                </div>
                                                <div class="f-body">
                                                    <div class="meta-title-tag">
                                                        <h4 class="mail-usr-name" data-mailtitle="eBill">eBill</h4>
                                                    </div>
                                                    <div class="meta-mail-time">
                                                        <p class="user-email" data-mailto="infocompany@mail.com">infocompany@mail.com</p>
                                                        <p class="mail-content-meta-date">11/25/2018 -</p>
                                                        <p class="meta-time align-self-center">1:51 PM</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="action-btns">
                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Reply">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left reply"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                </a>
                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Forward">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-right forward"><polyline points="15 14 20 9 15 4"></polyline><path d="M4 20v-7a4 4 0 0 1 4-4h12"></path></svg>
                                                </a>
                                            </div>
                                        </div>

                                        <p class="mail-content" data-mailTitle="eBill" data-maildescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>

                                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>

                                        <p>Best Regards,</p>
                                        <p>Info Company</p>
                                    </div>
                                </div>

                                <div id="mailCollapseEighteen" class="collapse" aria-labelledby="mailHeadingEighteen" data-parent="#mailbox-inbox">
                                    <div class="mail-content-container mailInbox" data-mailfrom="info@mail.com" data-mailto="infocompany@mail.com" data-mailcc="">

                                        <div class="d-flex justify-content-between mb-5">
                                            <div class="d-flex user-info">
                                                <div class="f-head">
                                                    <img src="assets/img/90x90.jpg" class="user-profile" alt="avatar">
                                                </div>
                                                <div class="f-body">
                                                    <div class="meta-title-tag">
                                                        <h4 class="mail-usr-name" data-mailtitle="">Info Company</h4>
                                                    </div>
                                                    <div class="meta-mail-time">
                                                        <p class="user-email" data-mailto="infocompany@mail.com">infocompany@mail.com</p>
                                                        <p class="mail-content-meta-date current-recent-mail">12/14/2020 -</p>
                                                        <p class="meta-time align-self-center">11:45 PM</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="action-btns">
                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Reply">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left reply"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                </a>
                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Forward">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-right forward"><polyline points="15 14 20 9 15 4"></polyline><path d="M4 20v-7a4 4 0 0 1 4-4h12"></path></svg>
                                                </a>
                                            </div>
                                        </div>

                                        <p class="mail-content" data-mailTitle="New Offers" data-maildescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'> Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>

                                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>

                                        <p>Best Regards,</p>
                                        <p>Info Company</p>


                                        <div class="attachments">
                                            <h6 class="attachments-section-title">Attachments</h6>
                                            <div class="attachment file-pdf">
                                                <div class="media">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                                    <div class="media-body">
                                                        <p class="file-name">Confirm File</p>
                                                        <p class="file-size">450kb</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div id="mailCollapseSix" class="collapse" aria-labelledby="mailHeadingSix" data-parent="#mailbox-inbox">
                                    <div class="mail-content-container sentmail" data-mailfrom="info@mail.com" data-mailto="justincross@mail.com" data-mailcc="">

                                        <div class="d-flex justify-content-between mb-3">
                                            <div class="d-flex user-info">
                                                <div class="f-body">
                                                    <div class="meta-mail-time">
                                                        <div class="">
                                                            <p class="user-email" data-mailto="justincross@mail.com"><span>To,</span> justincross@mail.com </p>
                                                        </div>
                                                        <p class="mail-content-meta-date">12/14/219 -</p>
                                                        <p class="meta-time align-self-center">3:10 PM</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="action-btns">
                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Reply">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left reply"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                </a>
                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Forward">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-right forward"><polyline points="15 14 20 9 15 4"></polyline><path d="M4 20v-7a4 4 0 0 1 4-4h12"></path></svg>
                                                </a>
                                            </div>
                                        </div>

                                        <p class="mail-content" data-mailTitle="App Project Checklist" data-maildescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>

                                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>

                                        <p>Best Regards,</p>
                                        <p>Shaun Park</p>

                                        <div class="attachments">
                                            <h6 class="attachments-section-title">Attachments</h6>
                                            <div class="attachment file-folder">
                                                <div class="media">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>
                                                    <div class="media-body">
                                                        <p class="file-name">Important Docs</p>
                                                        <p class="file-size">2.1MB</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="attachment file-img">
                                                <div class="media">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                                                    <div class="media-body">
                                                        <p class="file-name">Photo.png</p>
                                                        <p class="file-size">50kb</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="mailCollapseSeven" class="collapse" aria-labelledby="mailHeadingSeven" data-parent="#mailbox-inbox">
                                    <div class="mail-content-container important" data-mailfrom="info@mail.com" data-mailto="niahillyer@mail.com" data-mailcc="">

                                        <div class="d-flex justify-content-between mb-5">
                                            <div class="d-flex user-info">
                                                <div class="f-head">
                                                    <img src="assets/img/90x90.jpg" class="user-profile" alt="avatar">
                                                </div>
                                                <div class="f-body">
                                                    <div class="meta-title-tag">
                                                        <h4 class="mail-usr-name" data-mailtitle="Motion UI Kit">Nia Hillyer</h4>
                                                    </div>
                                                    <div class="meta-mail-time">
                                                        <p class="user-email" data-mailto="niahillyer@mail.com">niahillyer@mail.com</p>
                                                        <p class="mail-content-meta-date current-recent-mail">12/14/2020 -</p>
                                                        <p class="meta-time align-self-center">2:22 AM</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="action-btns">
                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Reply">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left reply"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                </a>
                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="op" data-original-title="Forward">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-right forward"><polyline points="15 14 20 9 15 4"></polyline><path d="M4 20v-7a4 4 0 0 1 4-4h12"></path></svg>
                                                </a>
                                            </div>
                                        </div>

                                        <p class="mail-content" data-mailTitle="Motion UI Kit" data-maildescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>

                                        <div class="gallery text-center">
                                            <img alt="image-gallery" src="assets/img/350x250.jpg" class="img-fluid mb-4 mt-4" style="width: 250px; height: 180px;">
                                            <img alt="image-gallery" src="assets/img/350x250.jpg" class="img-fluid mb-4 mt-4" style="width: 250px; height: 180px;">
                                            <img alt="image-gallery" src="assets/img/350x250.jpg" class="img-fluid mb-4 mt-4" style="width: 250px; height: 180px;">
                                        </div>

                                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>

                                        <p>Best Regards,</p>
                                        <p>Nia Hillyer</p>

                                    </div>
                                </div>

                                <div id="mailCollapseEight" class="collapse" aria-labelledby="mailHeadingEight" data-parent="#mailbox-inbox">
                                    <div class="mail-content-container important" data-mailfrom="info@mail.com" data-mailto="irishubbard@mail.com" data-mailcc="">

                                        <div class="d-flex justify-content-between mb-5">
                                            <div class="d-flex user-info">
                                                <div class="f-head">
                                                    <img src="assets/img/90x90.jpg" class="user-profile" alt="avatar">
                                                </div>
                                                <div class="f-body">
                                                    <div class="meta-title-tag">
                                                        <h4 class="mail-usr-name" data-mailtitle="Green Illustration">Iris Hubbard</h4>
                                                    </div>
                                                    <div class="meta-mail-time">
                                                        <p class="user-email" data-mailto="irishubbard@mail.com">irishubbard@mail.com</p>
                                                        <p class="mail-content-meta-date current-recent-mail">12/14/2020 -</p>
                                                        <p class="meta-time align-self-center">1:40 PM</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="action-btns">
                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Reply">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left reply"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                </a>
                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Forward">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-right forward"><polyline points="15 14 20 9 15 4"></polyline><path d="M4 20v-7a4 4 0 0 1 4-4h12"></path></svg>
                                                </a>
                                            </div>
                                        </div>

                                        <p class="mail-content" data-mailTitle="Green Illustration" data-maildescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>

                                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>

                                        <p>Best Regards,</p>
                                        <p>Iris Hubbard</p>

                                    </div>
                                </div>

                                <div id="mailCollapseNine" class="collapse" aria-labelledby="mailHeadingNine" data-parent="#mailbox-inbox">
                                    <div class="mail-content-container spam" data-mailfrom="info@mail.com" data-mailto="alexGray@mail.com" data-mailcc="">

                                        <div class="d-flex justify-content-between mb-5">
                                            <div class="d-flex user-info">
                                                <div class="f-head">
                                                    <img src="assets/img/90x90.jpg" class="user-profile" alt="avatar">
                                                </div>
                                                <div class="f-body">
                                                    <div class="meta-title-tag">
                                                        <h4 class="mail-usr-name" data-mailtitle="Weekly Newsletter">Alex Gray</h4>
                                                    </div>
                                                    <div class="meta-mail-time">
                                                        <p class="user-email" data-mailto="alexGray@mail.com">alexGray@mail.com</p>
                                                        <p class="mail-content-meta-date current-recent-mail">12/14/2020 -</p>
                                                        <p class="meta-time align-self-center">10:18 AM</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="action-btns">
                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Reply">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left reply"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                </a>
                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Forward">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-right forward"><polyline points="15 14 20 9 15 4"></polyline><path d="M4 20v-7a4 4 0 0 1 4-4h12"></path></svg>
                                                </a>
                                            </div>
                                        </div>

                                        <p class="mail-content" data-mailTitle="Weekly Newsletter" data-maildescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'> Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. </p>

                                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>

                                        <p>Best Regards,</p>
                                        <p>Alexander Gray</p>

                                        <div class="attachments">
                                            <h6 class="attachments-section-title">Attachments</h6>
                                            <div class="attachment file-pdf">
                                                <div class="media">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                                    <div class="media-body">
                                                        <p class="file-name">Confirm File</p>
                                                        <p class="file-size">450kb</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="attachment file-folder">
                                                <div class="media">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-folder"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>
                                                    <div class="media-body">
                                                        <p class="file-name">Important Docs</p>
                                                        <p class="file-size">2.1MB</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="attachment file-img">
                                                <div class="media">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                                                    <div class="media-body">
                                                        <p class="file-name">Photo.png</p>
                                                        <p class="file-size">50kb</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="mailCollapseTen" class="collapse" aria-labelledby="mailHeadingTen" data-parent="#mailbox-inbox">
                                    <div class="mail-content-container trashed" data-mailfrom="info@mail.com" data-mailto="ryanMCkillop@mail.com" data-mailcc="">

                                        <div class="d-flex justify-content-between mb-5">
                                            <div class="d-flex user-info">
                                                <div class="f-head">
                                                    <img src="assets/img/90x90.jpg" class="user-profile" alt="avatar">
                                                </div>
                                                <div class="f-body">
                                                    <div class="meta-title-tag">
                                                        <h4 class="mail-usr-name" data-mailtitle="Make it Simple">Ryan MC Killop</h4>
                                                    </div>
                                                    <div class="meta-mail-time">
                                                        <p class="user-email" data-mailto="ryanMCkillop@mail.com">ryanMCkillop@mail.com</p>
                                                        <p class="mail-content-meta-date current-recent-mail">12/14/2020 -</p>
                                                        <p class="meta-time align-self-center">11:45 PM</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="action-btns">
                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Reply">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-left reply"><polyline points="9 14 4 9 9 4"></polyline><path d="M20 20v-7a4 4 0 0 0-4-4H4"></path></svg>
                                                </a>
                                                <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" data-original-title="Forward">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-corner-up-right forward"><polyline points="15 14 20 9 15 4"></polyline><path d="M4 20v-7a4 4 0 0 1 4-4h12"></path></svg>
                                                </a>
                                            </div>
                                        </div>
                                        <p class="mail-content" data-mailTitle="Make it Simple" data-maildescription='{"ops":[{"insert":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat consequat. Duis lacus nibh, sagittis id varius vel, aliquet non augue. Vivamus sem ante, ultrices at ex a, rhoncus ullamcorper tellus. Nunc iaculis eu ligula ac consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum mattis urna neque, eget posuere lorem tempus non. Suspendisse ac turpis dictum, convallis est ut, posuere sem. Etiam imperdiet aliquam risus, eu commodo urna vestibulum at. Suspendisse malesuada lorem eu sodales aliquam.\n"}]}'> Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>

                                        <div class="gallery text-center">
                                            <img alt="image-gallery" src="assets/img/350x250.jpg" class="img-fluid mb-4 mt-4" style="width: 250px; height: 180px;">
                                            <img alt="image-gallery" src="assets/img/350x250.jpg" class="img-fluid mb-4 mt-4" style="width: 250px; height: 180px;">
                                            <img alt="image-gallery" src="assets/img/350x250.jpg" class="img-fluid mb-4 mt-4" style="width: 250px; height: 180px;">
                                        </div>

                                        <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>

                                        <p>Best Regards,</p>
                                        <p>Ryan McKillop</p>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="composeMailModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="modal"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                    <div class="compose-box">
                                        <div class="compose-content">
                                            <form>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="d-flex mb-4 mail-form">
                                                            <p>From:</p>
                                                            <select class="" id="m-form">
                                                                <option value="info@mail.com">Info &lt;info@mail.com&gt;</option>
                                                                <option value="shaun@mail.com">Shaun Park &lt;shaun@mail.com&gt;</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="d-flex mb-4 mail-to">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                                            <div class="">
                                                                <input type="email" id="m-to" placeholder="To" class="form-control">
                                                                <span class="validation-text"></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="d-flex mb-4 mail-cc">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3" y2="6"></line><line x1="3" y1="12" x2="3" y2="12"></line><line x1="3" y1="18" x2="3" y2="18"></line></svg>
                                                            <div>
                                                                <input type="text" id="m-cc" placeholder="Cc" class="form-control">
                                                                <span class="validation-text"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="d-flex mb-4 mail-subject">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                                    <div class="w-100">
                                                        <input type="text" id="m-subject" placeholder="Subject" class="form-control">
                                                        <span class="validation-text"></span>
                                                    </div>
                                                </div>

                                                <div class="d-flex">
                                                    <input type="file" class="form-control-file" id="mail_File_attachment" multiple="multiple">
                                                </div>

                                                <div id="editor-container">

                                                </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button id="btn-save" class="btn float-left"> Save</button>
                                    <button id="btn-reply-save" class="btn float-left"> Save Reply</button>
                                    <button id="btn-fwd-save" class="btn float-left"> Save Fwd</button>

                                    <button class="btn" data-dismiss="modal"> <i class="flaticon-delete-1"></i> Discard</button>

                                    <button id="btn-reply" class="btn"> Reply</button>
                                    <button id="btn-fwd" class="btn"> Forward</button>
                                    <button id="btn-send" class="btn"> Send</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>

        </div>
    </div>

</div>
@endsection
@section('css')

<script src="{{ asset('assets/js/ie11fix/fn.fix-padStart.js')}}"></script>
<script src="{{ asset('plugins/editors/quill/quill.js')}}"></script>
<script src="{{ asset('plugins/sweetalerts/sweetalert2.min.js')}}"></script>
<script src="{{ asset('plugins/notification/snackbar/snackbar.min.js')}}"></script>
<script src="{{ asset('assets/js/apps/custom-mailbox.js')}}"></script>
@endsection
@section('auddy')


    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/editors/quill/quill.snow.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/forms/theme-checkbox-radio.css')}}">
    <link href="{{ asset('assets/css/apps/mailbox.css')}}" rel="stylesheet" type="text/css" />

    <script src="{{ asset('plugins/sweetalerts/promise-polyfill.js')}}"></script>
    <link href="{{ asset('plugins/sweetalerts/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/sweetalerts/sweetalert.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('plugins/notification/snackbar/snackbar.min.css')}}" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->
@endsection
