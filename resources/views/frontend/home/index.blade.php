@extends('frontend.layout.main')

@section('extra-css')
@endsection

@section('content')
<div class="card-inner animated active" id="card-home">
  <div class="card-wrap">
    <div id="post-139" class="post-139 page type-page status-publish hentry">
      <div data-elementor-type="wp-page" data-elementor-id="139" class="elementor elementor-139">
        <section
          class="elementor-section elementor-top-section elementor-element elementor-element-1368f2f elementor-section-full_width elementor-section-height-default elementor-section-height-default"
          data-id="1368f2f" data-element_type="section">
          <div class="elementor-container elementor-column-gap-no">
            <div
              class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8d69b8b"
              data-id="8d69b8b" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                <div
                  class="elementor-element elementor-element-b939dc4 elementor-widget elementor-widget-ryancv-about-me"
                  data-id="b939dc4" data-element_type="widget" data-widget_type="ryancv-about-me.default">
                  <div class="elementor-widget-container">
                    <!-- About -->
                    <div class="content about">
                      <!-- title -->
                      <div class="title"><span>About Me</span></div> <!-- content -->
                      <div class="row">
                        <div class="col col-d-6 col-t-12 col-m-12 border-line-v">
                          <div class="text-box">
                            <div>
                              <p><strong>Hello! I’m {{ $profile_infos->name }}.</strong><br />{{$profile_infos->about}}
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="col col-d-6 col-t-12 col-m-12 border-line-v">
                          <div class="info-list">
                            <ul>
                              <li> <strong> <span> Age: </span> </strong> <span> {{ $profile_infos->age }} </span></li>
                              <li> <strong> <span> Residence: </span> </strong> <span> {{ $profile_infos->residence }}
                                </span>
                              </li>
                              <li> <strong> <span> Company: </span> </strong> <span> {{ $profile_infos->company }}
                                </span></li>
                              <li> <strong> <span> Position: </span> </strong> <span> {{ $profile_infos->position }}
                                </span>
                              </li>
                              <li> <strong> <span> Address: </span> </strong> <span> {{ $profile_infos->location }}
                                </span></li>
                            </ul>
                          </div>
                        </div>
                        <div class="clear"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section
          class="elementor-section elementor-top-section elementor-element elementor-element-c6239ff elementor-section-full_width elementor-section-height-default elementor-section-height-default"
          data-id="c6239ff" data-element_type="section">
          <div class="elementor-container elementor-column-gap-no">
            <div
              class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-73fe5b3"
              data-id="73fe5b3" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                <div
                  class="elementor-element elementor-element-ff09fc9 elementor-widget elementor-widget-ryancv-custom-text"
                  data-id="ff09fc9" data-element_type="widget" data-widget_type="ryancv-custom-text.default">
                  <div class="elementor-widget-container">
                    <div class="content custom-text">
                      <div class="title"> <span>More About Me</span></div>
                      <div class="row border-line-v">
                        <div class="col col-m-12 col-t-12 col-d-12">
                          <div class="post-box single-post-text">
                            <div class="blog-content">
                              <div>
                                {!! $profile_infos->rich_about !!}
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
          </div>
        </section>
      </div>
    </div>
  </div>
</div>

<div class="card-inner" id="card-resume">
  <div class="card-wrap">
    <div id="post-41" class="post-41 page type-page status-publish hentry">
      <div data-elementor-type="wp-page" data-elementor-id="41" class="elementor elementor-41">
        <section
          class="elementor-section elementor-top-section elementor-element elementor-element-59895bb elementor-section-full_width elementor-section-height-default elementor-section-height-default"
          data-id="59895bb" data-element_type="section">
          <div class="elementor-container elementor-column-gap-no">
            <div
              class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-be20ba8"
              data-id="be20ba8" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                <div
                  class="elementor-element elementor-element-26b97d8 elementor-widget elementor-widget-ryancv-custom-text"
                  data-id="26b97d8" data-element_type="widget" data-widget_type="ryancv-custom-text.default">
                  <div class="elementor-widget-container">
                    <!-- Custom Text -->
                    <div class="content custom-text">
                      <!-- title -->
                      <div class="title"> <span>Resume</span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section
          class="elementor-section elementor-top-section elementor-element elementor-element-2926877 elementor-section-full_width row elementor-section-height-default elementor-section-height-default"
          data-id="2926877" data-element_type="section">
          <div class="elementor-container elementor-column-gap-no">
            <div
              class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-24104fa col"
              data-id="24104fa" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-a38a935 elementor-widget elementor-widget-ryancv-resume"
                  data-id="a38a935" data-element_type="widget" data-widget_type="ryancv-resume.default">
                  <div class="elementor-widget-container">
                    <!-- resume item -->
                    <div class="resume-item">
                      <div class="resume-title border-line-h">
                        <div class="icon"> <svg aria-hidden="true" class="e-font-icon-svg e-fas-suitcase"
                            viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <path
                              d="M128 480h256V80c0-26.5-21.5-48-48-48H176c-26.5 0-48 21.5-48 48v400zm64-384h128v32H192V96zm320 80v256c0 26.5-21.5 48-48 48h-48V128h48c26.5 0 48 21.5 48 48zM96 480H48c-26.5 0-48-21.5-48-48V176c0-26.5 21.5-48 48-48h48v352z">
                            </path>
                          </svg></div>
                        <div class="name"><span>Experience</span></div>
                      </div>
                      <div class="resume-items line-timeline">
                        @foreach($experiances as $experiance)
                        <div class="resume-item border-line-h active">
                          <div class="image">
                            <noscript><img decoding="async" src="{{ Voyager::image($experiance->work_place_logo) }}"
                                alt="{{ $experiance->work_place }}" /></noscript><img class="lazyload" decoding="async"
                              src='{{ Voyager::image($experiance->work_place_logo) }}'
                              data-src="{{ Voyager::image($experiance->work_place_logo) }}"
                              alt="{{ $experiance->work_place }}" />
                          </div>
                          <div class="date"> <span> {{ $experiance->start_year }} - {{ $experiance->end_year }} </span>
                          </div>
                          <div class="name"> <span> {{ $experiance->name }} </span></div>
                          <div class="company"> <span> {{ $experiance->work_place }} </span></div>
                          <div class="single-post-text">
                            <div>
                              {!! $experiance->about !!}
                            </div>
                          </div>
                        </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-845c1d0 col border-line-v"
              data-id="845c1d0" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-a64937a elementor-widget elementor-widget-ryancv-resume"
                  data-id="a64937a" data-element_type="widget" data-widget_type="ryancv-resume.default">
                  <div class="elementor-widget-container">
                    <!-- resume item -->
                    <div class="resume-item">
                      <div class="resume-title border-line-h">
                        <div class="icon"> <svg aria-hidden="true" class="e-font-icon-svg e-fas-university"
                            viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                            <path
                              d="M496 128v16a8 8 0 0 1-8 8h-24v12c0 6.627-5.373 12-12 12H60c-6.627 0-12-5.373-12-12v-12H24a8 8 0 0 1-8-8v-16a8 8 0 0 1 4.941-7.392l232-88a7.996 7.996 0 0 1 6.118 0l232 88A8 8 0 0 1 496 128zm-24 304H40c-13.255 0-24 10.745-24 24v16a8 8 0 0 0 8 8h464a8 8 0 0 0 8-8v-16c0-13.255-10.745-24-24-24zM96 192v192H60c-6.627 0-12 5.373-12 12v20h416v-20c0-6.627-5.373-12-12-12h-36V192h-64v192h-64V192h-64v192h-64V192H96z">
                            </path>
                          </svg></div>
                        <div class="name"> <span>Education</span></div>
                      </div>
                      <div class="resume-items line-timeline">
                        @foreach($educations as $education)
                        <div class="resume-item border-line-h active">
                          <div class="image">
                            <noscript><img decoding="async" src="{{ Voyager::image($education->work_place_logo) }}"
                                alt="{{ $education->work_place }}" /></noscript><img class="lazyload" decoding="async"
                              src='{{ Voyager::image($education->work_place_logo) }}'
                              data-src="{{ Voyager::image($education->work_place_logo) }}"
                              alt="{{ $education->work_place }}" />
                          </div>
                          <div class="date"> <span> {{ $education->start_year }} - {{ $education->end_year }} </span>
                          </div>
                          <div class="name"> <span> {{ $education->name }} </span></div>
                          <div class="company"> <span> {{ $education->work_place }} </span></div>
                          <div class="single-post-text">
                            <div>
                              {!! $education->about !!}
                            </div>
                          </div>
                          <a href="{{ Voyager::image($education->image) }}" class="lnk lnk-2"> <span class="text">
                              Certificate </span> <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                        </div>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section
          class="elementor-section elementor-top-section elementor-element elementor-element-0631c8a elementor-section-full_width elementor-section-height-default elementor-section-height-default"
          data-id="0631c8a" data-element_type="section">
          <div class="elementor-container elementor-column-gap-no">
            <div
              class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-573fdc8"
              data-id="573fdc8" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-3952aad elementor-widget elementor-widget-spacer"
                  data-id="3952aad" data-element_type="widget" data-widget_type="spacer.default">
                  <div class="elementor-widget-container">
                    <style>
                      /*! elementor - v3.20.0 - 10-04-2024 */
                      .elementor-column .elementor-spacer-inner {
                        height: var(--spacer-size)
                      }

                      .e-con {
                        --container-widget-width: 100%
                      }

                      .e-con-inner>.elementor-widget-spacer,
                      .e-con>.elementor-widget-spacer {
                        width: var(--container-widget-width, var(--spacer-size));
                        --align-self: var(--container-widget-align-self, initial);
                        --flex-shrink: 0
                      }

                      .e-con-inner>.elementor-widget-spacer>.elementor-widget-container,
                      .e-con>.elementor-widget-spacer>.elementor-widget-container {
                        height: 100%;
                        width: 100%
                      }

                      .e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer,
                      .e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer {
                        height: 100%
                      }

                      .e-con-inner>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner,
                      .e-con>.elementor-widget-spacer>.elementor-widget-container>.elementor-spacer>.elementor-spacer-inner {
                        height: var(--container-widget-height, var(--spacer-size))
                      }

                      .e-con-inner>.elementor-widget-spacer.elementor-widget-empty,
                      .e-con>.elementor-widget-spacer.elementor-widget-empty {
                        position: relative;
                        min-height: 22px;
                        min-width: 22px
                      }

                      .e-con-inner>.elementor-widget-spacer.elementor-widget-empty .elementor-widget-empty-icon,
                      .e-con>.elementor-widget-spacer.elementor-widget-empty .elementor-widget-empty-icon {
                        position: absolute;
                        top: 0;
                        bottom: 0;
                        left: 0;
                        right: 0;
                        margin: auto;
                        padding: 0;
                        width: 22px;
                        height: 22px
                      }
                    </style>
                    <div class="elementor-spacer">
                      <div class="elementor-spacer-inner" style="padding:30px"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section
          class="elementor-section elementor-top-section elementor-element elementor-element-deefe3f elementor-section-full_width elementor-section-height-default elementor-section-height-default"
          data-id="deefe3f" data-element_type="section">
          <div class="elementor-container elementor-column-gap-no">
            <div
              class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8ec419d"
              data-id="8ec419d" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                <div
                  class="elementor-element elementor-element-cae1473 elementor-widget elementor-widget-ryancv-custom-text"
                  data-id="cae1473" data-element_type="widget" data-widget_type="ryancv-custom-text.default"
                  style="height: 50px;">
                  <div class="elementor-widget-container">
                    <!-- Custom Text -->
                    <div class="content custom-text">
                      <!-- title -->
                      <div class="title"> <span>Skills</span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section
          class="elementor-section elementor-top-section elementor-element elementor-element-77e9f37 elementor-section-full_width row elementor-section-height-default elementor-section-height-default"
          data-id="77e9f37" data-element_type="section">
          <div class="elementor-container elementor-column-gap-no">
            <div
              class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-552e9ac col"
              data-id="552e9ac" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-2808be1 elementor-widget elementor-widget-ryancv-skills"
                  data-id="2808be1" data-element_type="widget" data-widget_type="ryancv-skills.default">
                  <div class="elementor-widget-container">
                    <!-- skill item -->
                    <div class="skills-item">
                      <div class="skills-list percent">
                        <ul>
                          @foreach($overall_skills as $index => $overall_skill)
                          <li class="border-line-h" style="{{ $loop->first ? 'padding-top:0;' : '' }}">
                            <div class="name"><span>{{ $overall_skill->name }}</span></div>
                            <div class="progress">
                              <div class="percentage" style="width:{{ $overall_skill->rate }}0%;"></div>
                            </div>
                          </li>
                          @endforeach
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section
          class="elementor-section elementor-top-section elementor-element elementor-element-f74ec84 elementor-section-full_width row elementor-section-height-default elementor-section-height-default"
          data-id="f74ec84" data-element_type="section">
          <div class="elementor-container elementor-column-gap-no">
            <div
              class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-c60c53c col"
              data-id="c60c53c" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-af7804b elementor-widget elementor-widget-ryancv-skills"
                  data-id="af7804b" data-element_type="widget" data-widget_type="ryancv-skills.default">
                  <div class="elementor-widget-container">
                    <!-- skill item -->
                    <div class="skills-item">
                      <div class="skills-list dotted">
                        <div class="skill-title border-line-h">
                          <div class="icon"> <svg aria-hidden="true" class="e-font-icon-svg e-fas-language"
                              viewBox="0 0 640 512" xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M152.1 236.2c-3.5-12.1-7.8-33.2-7.8-33.2h-.5s-4.3 21.1-7.8 33.2l-11.1 37.5H163zM616 96H336v320h280c13.3 0 24-10.7 24-24V120c0-13.3-10.7-24-24-24zm-24 120c0 6.6-5.4 12-12 12h-11.4c-6.9 23.6-21.7 47.4-42.7 69.9 8.4 6.4 17.1 12.5 26.1 18 5.5 3.4 7.3 10.5 4.1 16.2l-7.9 13.9c-3.4 5.9-10.9 7.8-16.7 4.3-12.6-7.8-24.5-16.1-35.4-24.9-10.9 8.7-22.7 17.1-35.4 24.9-5.8 3.5-13.3 1.6-16.7-4.3l-7.9-13.9c-3.2-5.6-1.4-12.8 4.2-16.2 9.3-5.7 18-11.7 26.1-18-7.9-8.4-14.9-17-21-25.7-4-5.7-2.2-13.6 3.7-17.1l6.5-3.9 7.3-4.3c5.4-3.2 12.4-1.7 16 3.4 5 7 10.8 14 17.4 20.9 13.5-14.2 23.8-28.9 30-43.2H412c-6.6 0-12-5.4-12-12v-16c0-6.6 5.4-12 12-12h64v-16c0-6.6 5.4-12 12-12h16c6.6 0 12 5.4 12 12v16h64c6.6 0 12 5.4 12 12zM0 120v272c0 13.3 10.7 24 24 24h280V96H24c-13.3 0-24 10.7-24 24zm58.9 216.1L116.4 167c1.7-4.9 6.2-8.1 11.4-8.1h32.5c5.1 0 9.7 3.3 11.4 8.1l57.5 169.1c2.6 7.8-3.1 15.9-11.4 15.9h-22.9a12 12 0 0 1-11.5-8.6l-9.4-31.9h-60.2l-9.1 31.8c-1.5 5.1-6.2 8.7-11.5 8.7H70.3c-8.2 0-14-8.1-11.4-15.9z">
                              </path>
                            </svg></div>
                          <div class="name"> <span>Languages</span></div>
                        </div>
                        <ul>
                          @foreach($languages as $language)
                          <li class="border-line-h">
                            <div class="name"> <span> {{ $language->name }} </span></div>
                            <div class="progress ">
                              <div class="percentage" style="width:{{ $language->rate }}0%;"></div>
                            </div>
                          </li>
                          @endforeach
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-9170935 col border-line-v"
              data-id="9170935" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-7b18142 elementor-widget elementor-widget-ryancv-skills"
                  data-id="7b18142" data-element_type="widget" data-widget_type="ryancv-skills.default">
                  <div class="elementor-widget-container">
                    <!-- skill item -->
                    <div class="skills-item">
                      <div class="skills-list list">
                        <div class="skill-title border-line-h">
                          <div class="icon"> <svg aria-hidden="true" class="e-font-icon-svg e-fas-list"
                              viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                              <path
                                d="M80 368H16a16 16 0 0 0-16 16v64a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16v-64a16 16 0 0 0-16-16zm0-320H16A16 16 0 0 0 0 64v64a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16V64a16 16 0 0 0-16-16zm0 160H16a16 16 0 0 0-16 16v64a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16v-64a16 16 0 0 0-16-16zm416 176H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm0-320H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16V80a16 16 0 0 0-16-16zm0 160H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16z">
                              </path>
                            </svg></div>
                          <div class="name"> <span>Knowledge</span></div>
                        </div>
                        <ul>
                          @foreach($knowledges as $knowledge)
                          <li class="border-line-h">
                            <div class="name"> <i class="fa fa-check-square-o" aria-hidden="true"
                                style="color:#b59c62"></i> <span> {{
                                $knowledge->name }} </span></div>
                            <div class="progress ">
                              <div class="percentage"></div>
                            </div>
                          </li>
                          @endforeach
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section
          class="elementor-section elementor-top-section elementor-element elementor-element-4dd8d99 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
          data-id="4dd8d99" data-element_type="section">
          <div class="elementor-container elementor-column-gap-no">
            <div
              class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2a0329b"
              data-id="2a0329b" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-a9262f9 elementor-widget elementor-widget-spacer"
                  data-id="a9262f9" data-element_type="widget" data-widget_type="spacer.default">
                  <div class="elementor-widget-container">
                    <div class="elementor-spacer">
                      <div class="elementor-spacer-inner" style="padding:30px"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section
          class="elementor-section elementor-top-section elementor-element elementor-element-11732e3 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
          data-id="11732e3" data-element_type="section">
          <div class="elementor-container elementor-column-gap-no">
            <div
              class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-2f3d707"
              data-id="2f3d707" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-32ca0c1 elementor-widget elementor-widget-ryancv-quote"
                  data-id="32ca0c1" data-element_type="widget" data-widget_type="ryancv-quote.default">
                  <div class="elementor-widget-container">
                    <!-- Quote -->
                    <div class="content quote">
                      <!-- title -->
                      <div class="title"> <span>Quote</span></div> <!-- content -->
                      <div class="row">
                        <div class="col col-d-12 col-t-12 col-m-12 border-line-v">
                          <div class="revs-item">
                            <div class="text">
                              <div>{{Voyager::setting('site.quote')}}</div>
                            </div>
                          </div>
                        </div>
                        <div class="clear"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div><!-- #post-41 -->
  </div>
</div>

<div class="card-inner" id="card-works">
  <div class="card-wrap">
    <div id="post-46" class="post-46 page type-page status-publish hentry">
      <div data-elementor-type="wp-page" data-elementor-id="46" class="elementor elementor-46">
        <section
          class="elementor-section elementor-top-section elementor-element elementor-element-484379f elementor-section-full_width elementor-section-height-default elementor-section-height-default"
          data-id="484379f" data-element_type="section">
          <div class="elementor-container elementor-column-gap-no">
            <div
              class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f31adcd"
              data-id="f31adcd" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                <div
                  class="elementor-element elementor-element-91b90f8 elementor-widget elementor-widget-ryancv-portfolio"
                  data-id="91b90f8" data-element_type="widget" data-widget_type="ryancv-portfolio.default">
                  <div class="elementor-widget-container">
                    <!-- Works -->
                    <div class="content works-grid works ">
                      <!-- title -->
                      <div class="title"> <span>Gallery</span></div> <!-- filters -->
                      <div class="filter-menu filter-button-group">
                        <div class="f_btn active">
                          <label>
                            <input type="radio" name="fl_radio" value=".grid-item" />All</label>
                        </div>
                        @foreach($gallery_categories as $gallery_category)
                        <div class="f_btn">
                          <label>
                            <input type="radio" name="fl_radio" value="#{{ $gallery_category->slug }}" />
                            {{$gallery_category->name }}
                          </label>
                        </div>
                        @endforeach
                      </div>


                      <div class="row grid-items border-line-v columns-2">
                        @foreach($galleries as $gallery)
                        @php
                        $gallery_category = '';
                        $gallery_category_name = '';
                        @endphp
                        @foreach($gallery_categories as $gallery_category)
                        @if($gallery->category_id == $gallery_category->id)
                        @php
                        $gallery_category_slug = $gallery_category->slug;
                        $gallery_category_name = $gallery_category->name;
                        @endphp
                        @endif
                        @endforeach
                        <div class="col col-d-6 col-t-6 col-m-12 border-line-h grid-item f-gallery"
                          id="{{ $gallery_category_slug }}">
                          <div class="box-item">
                            <div class="image">
                              <a href="{{ $gallery_category_slug == 'video' ? url($gallery->video_link) : Voyager::image($gallery->image) }}"
                                data-fancybox data-caption="{{ $gallery->name }}">
                                <img decoding="async" width="800" height="534"
                                  src='{{ Voyager::image($gallery->image) }}'
                                  data-src="{{ Voyager::image($gallery->image) }}"
                                  class="lazyload attachment-ryancv_600xauto size-ryancv_600xauto wp-post-image"
                                  alt="{{ $gallery->name }}" data-srcset="{{ Voyager::image($gallery->image) }}"
                                  data-sizes="(max-width: 800px) 100vw, 800px" />
                                <span class="info">
                                  <span class="fa fa-link" aria-hidden="true"></span>
                                </span>
                              </a>
                              <div class="mfp-hide">
                                <a href="{{ $gallery_category_slug == 'video' ? url($gallery->video_link) : Voyager::image($gallery->image) }}"
                                  data-fancybox data-caption="{{ $gallery->name }}"></a>
                                <a href="{{ $gallery_category_slug == 'video' ? url($gallery->video_link) : Voyager::image($gallery->image) }}"
                                  data-fancybox data-caption="{{ $gallery->name }}"></a>
                              </div>
                            </div>
                            <div class="desc">
                              <a href="{{ $gallery_category_slug == 'video' ? url($gallery->video_link) : Voyager::image($gallery->image) }}"
                                class="name" data-fancybox data-caption="{{ $gallery->name }}">{{ $gallery->name }}</a>
                              <div class="category">{{ $gallery_category_name }}</div>
                            </div>
                          </div>
                        </div>
                        @endforeach
                        <div class="clear"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div><!-- #post-139 -->
  </div>
</div>

<div class="card-inner" id="card-blog">
  <div class="card-wrap">
    <div id="post-50" class="post-50 page type-page status-publish hentry">
      <div data-elementor-type="wp-page" data-elementor-id="50" class="elementor elementor-50">
        <section
          class="elementor-section elementor-top-section elementor-element elementor-element-2baaf94 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
          data-id="2baaf94" data-element_type="section">
          <div class="elementor-container elementor-column-gap-default">
            <div
              class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e6200bb"
              data-id="e6200bb" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-3148a7f elementor-widget elementor-widget-ryancv-blog"
                  data-id="3148a7f" data-element_type="widget" data-widget_type="ryancv-blog.default">
                  <div class="elementor-widget-container">
                    <!-- Blog -->
                    <div class="content works blog-grid blog">
                      <!-- title -->
                      <div class="title">
                        <span>Articles</span>
                      </div> <!-- filters -->
                      <div class="filter-menu filter-button-group">
                        <div class="f_btn active">
                          <label><input type="radio" name="fl_radio" value=".grid-item" />All</label>
                        </div>
                        @foreach($categories as $category)
                        <div class="f_btn">
                          <label><input type="radio" name="fl_radio" value=".{{ $category->slug }}" />
                            {{ $category->name }}
                          </label>
                        </div>
                        @endforeach
                      </div> <!-- content -->
                      <div class="row grid-items border-line-v">
                        <!-- blog item -->
                        @foreach($posts as $post)
                        @php
                        $post_category = '';
                        @endphp
                        @foreach($categories as $category)
                        @if($post->category_id == $category->id)
                        @php
                        $post_category = $category->slug;
                        @endphp
                        @endif
                        @endforeach
                        <div class="col col-d-6 col-t-6 col-m-12 grid-item {{ $post_category }}">
                          <div class="box-item">
                            <div
                              class="post-98 post type-post status-publish format-standard has-post-thumbnail hentry category-banking tag-code tag-html tag-plugin tag-wordpress">
                              <div class="image"> <a href="{{ route('post',$post->slug) }}">
                                  <div class="post-thumbnail">
                                    <img loading="lazy" decoding="async" width="800" height="375"
                                      src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20800%20375%22%3E%3C/svg%3E'
                                      data-src="{{ Voyager::image($post->image) }}"
                                      class="lazyload attachment-post-thumbnail size-post-thumbnail wp-post-image"
                                      alt="" data-srcset="{{ Voyager::image($post->image) }}"
                                      data-sizes="(max-width: 800px) 100vw, 800px" />
                                  </div>
                                  <!-- .post-thumbnail -->
                                </a></div>
                              <div class="desc">
                                <a href="{{ route('post',$post->slug) }}">
                                  <span class="date"> {{ \Carbon\Carbon::parse($post->created_at)->format('F d, Y') }}
                                  </span>
                                </a>
                                <a href="{{ route('post',$post->slug) }}" class="name">
                                  {{ $post->title }}
                                </a>
                                <div class="text">
                                  <p>{{ $post->excerpt }}</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        @endforeach
                        <div class="clear"></div>
                      </div>
                      <div class="bts bts-center"> <a class="lnk button load-more" href="#">Load More</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div><!-- #post-139 -->
  </div>
</div>

<div class="card-inner" id="card-contact">
  <div class="card-wrap">
    <div id="post-53" class="post-53 page type-page status-publish hentry">
      <div data-elementor-type="wp-page" data-elementor-id="53" class="elementor elementor-53">
        <section
          class="elementor-section elementor-top-section elementor-element elementor-element-22b6cc0 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
          data-id="22b6cc0" data-element_type="section">
          <div class="elementor-container elementor-column-gap-no">
            <div
              class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7400cb2"
              data-id="7400cb2" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                <div
                  class="elementor-element elementor-element-bc6e79d elementor-widget elementor-widget-ryancv-custom-text"
                  data-id="bc6e79d" data-element_type="widget" data-widget_type="ryancv-custom-text.default">
                  <div class="elementor-widget-container">
                    <!-- Custom Text -->
                    <div class="content custom-text">
                      <!-- title -->
                      <div class="title"> <span>Get in Touch</span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section
          class="elementor-section elementor-top-section elementor-element elementor-element-b1f83ef elementor-section-full_width elementor-section-height-default elementor-section-height-default"
          data-id="b1f83ef" data-element_type="section">
          <div class="elementor-container elementor-column-gap-no">
            <div
              class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e9080bc"
              data-id="e9080bc" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-5fa6e40 elementor-widget elementor-widget-google_maps"
                  data-id="5fa6e40" data-element_type="widget" data-widget_type="google_maps.default">
                  <div class="elementor-widget-container">
                    <style>
                      .elementor-widget-google_maps .elementor-widget-container {
                        overflow: hidden
                      }

                      .elementor-widget-google_maps .elementor-custom-embed {
                        line-height: 0
                      }

                      .elementor-widget-google_maps iframe {
                        height: 300px
                      }
                    </style>
                    <div class="elementor-custom-embed">
                      {!! Voyager::setting('site.map') !!}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section
          class="elementor-section elementor-top-section elementor-element elementor-element-2f63e83 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
          data-id="2f63e83" data-element_type="section">
          <div class="elementor-container elementor-column-gap-no">
            <div
              class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-fb174a3"
              data-id="fb174a3" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                <div
                  class="elementor-element elementor-element-d76ea60 elementor-widget elementor-widget-ryancv-info-list"
                  data-id="d76ea60" data-element_type="widget" data-widget_type="ryancv-info-list.default">
                  <div class="elementor-widget-container">
                    <!-- content -->
                    <div class="row">
                      <div class="col col-d-12 col-t-12 col-m-12 col-list-2 border-line-v">
                        <div class="info-list">
                          <ul>
                            <li>
                              <strong>
                                <span> Address:</span>
                              </strong>
                              <span> {{ $profile_infos->location }}</span>
                            </li>
                            <li>
                              <strong>
                                <span> Email:</span>
                              </strong>
                              <span> {{ Voyager::setting('site.email') }}</span>
                            </li>
                            <li>
                              <strong>
                                <span> Phone:</span>
                              </strong>
                              <span> {{ Voyager::setting('site.phone') }}</span>
                            </li>
                            <li>
                              <strong>
                                <span> Website:</span>
                              </strong>
                              <span>{{ Voyager::setting('site.website')}}</span>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="clear"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section
          class="elementor-section elementor-top-section elementor-element elementor-element-3fc0411 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
          data-id="3fc0411" data-element_type="section">
          <div class="elementor-container elementor-column-gap-no">
            <div
              class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7d1ea59"
              data-id="7d1ea59" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-30bf3ee elementor-widget elementor-widget-spacer"
                  data-id="30bf3ee" data-element_type="widget" data-widget_type="spacer.default">
                  <div class="elementor-widget-container">
                    <div class="elementor-spacer">
                      <div class="elementor-spacer-inner" style="padding:30px"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section
          class="elementor-section elementor-top-section elementor-element elementor-element-d642373 elementor-section-full_width elementor-section-height-default elementor-section-height-default"
          data-id="d642373" data-element_type="section">
          <div class="elementor-container elementor-column-gap-no">
            <div
              class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1b1aebf"
              data-id="1b1aebf" data-element_type="column">
              <div class="elementor-widget-wrap elementor-element-populated">
                <div
                  class="elementor-element elementor-element-6e2ae54 elementor-widget elementor-widget-ryancv-cf7-form"
                  data-id="6e2ae54" data-element_type="widget" data-widget_type="ryancv-cf7-form.default">
                  <div class="elementor-widget-container">
                    <!-- Contact Form -->
                    <div class="content contacts">
                      <!-- title -->
                      <div class="title"> <span>Contact Form</span></div> <!-- content -->
                      <div class="row">
                        <div class="col col-d-12 col-t-12 col-m-12 border-line-v">
                          <div class="contact_form">
                            <div class="wpcf7 no-js" id="wpcf7-f62-o1" lang="en-US" dir="ltr">
                              <div class="screen-reader-response">
                                <p role="status" aria-live="polite" aria-atomic="true"></p>
                                <ul></ul>
                              </div>
                              <form action="{{ route('contact.store') }}" method="post" class="wpcf7-form init"
                                aria-label="Contact form" novalidate="novalidate" data-status="init">
                                @csrf

                                <div class="row">
                                  <div class="col col-d-6 col-t-6 col-m-12">
                                    <div class="group-val">
                                      <p>
                                        @if ($errors->has('name'))
                                        <style>
                                          input::placeholder {
                                            color: red;
                                          }
                                        </style>
                                        <span class="wpcf7-form-control-wrap" data-name="your-name">
                                          <input size="40"
                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                            aria-required="true" aria-invalid="false"
                                            placeholder="Full Name is required" value="" type="text" name="name" />
                                        </span>
                                        @else
                                        <span class="wpcf7-form-control-wrap" data-name="your-name">
                                          <input size="40"
                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                            aria-required="true" aria-invalid="false" placeholder="Full Name" value=""
                                            type="text" name="name" />
                                        </span>
                                        @endif
                                      </p>
                                    </div>
                                  </div>
                                  <div class="col col-d-6 col-t-6 col-m-12">
                                    <div class="group-val">
                                      <p>
                                        @if($errors->has('email'))
                                        <span class="wpcf7-form-control-wrap" data-name="your-email">
                                          <input size="40"
                                            class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email"
                                            aria-required="true" aria-invalid="false"
                                            placeholder="Email Address is required" value="" type="email"
                                            name="email" />
                                        </span>
                                        @else
                                        <span class="wpcf7-form-control-wrap" data-name="your-email">
                                          <input size="40"
                                            class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email"
                                            aria-required="true" aria-invalid="false" placeholder="Email Address"
                                            value="" type="email" name="email" />
                                        </span>
                                        @endif
                                      </p>
                                    </div>
                                  </div>
                                  <div class="col col-d-12 col-t-12 col-m-12">
                                    <div class="group-val">
                                      <p>
                                        @if($errors->has('content'))
                                        <style>
                                          textarea::placeholder {
                                            color: red;
                                          }
                                        </style>
                                        <span class="wpcf7-form-control-wrap" data-name="your-message">
                                          <textarea cols="40" rows="10"
                                            class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                            aria-required="true" aria-invalid="false"
                                            placeholder="Your Message is required" name="content"></textarea>
                                        </span>
                                        @else
                                        <span class="wpcf7-form-control-wrap" data-name="your-message">
                                          <textarea cols="40" rows="10"
                                            class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required"
                                            aria-required="true" aria-invalid="false" placeholder="Your Message"
                                            name="content"></textarea>
                                        </span>
                                        @endif
                                      </p>
                                    </div>
                                  </div>
                                </div>
                                <div class="align-left">
                                  <p>
                                    <button type="submit" class="button">
                                      <span class="text">Send Message</span><span class="arrow">
                                      </span>
                                    </button>
                                  </p>
                                </div>
                                <div class="wpcf7-response-output" aria-hidden="true"></div>
                              </form>
                            </div>
                          </div>
                        </div>
                        <div class="clear"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</div>

<script>
  Fancybox.bind("[data-fancybox]", {
});
</script>

<style>
  .truncate {
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
  }

  .alert_custom {
    position: fixed;
    pointer-events: none;
    width: 100%;
    height: 100vh;
    top: 0;
    left: 0;
    z-index: 9999999999;
  }

  /* list */
  .alert_custom .list {
    display: flex;
    flex-direction: column;
    margin: 1rem;
    width: 100%;
    max-width: 400px;
    float: right;
  }

  /* item */
  .alert_custom .list .item {
    --line-height: 4px;
    position: relative;
    display: flex;
    align-items: center;
    padding: .5rem;
    color: #fff;
    border-radius: 0.25rem;
    overflow: hidden;
    padding-bottom: calc(.5rem + var(--line-height))
  }

  .alert_custom .list .item.success {
    background: #16A34A;
  }

  .alert_custom .list .item.error {
    background: #EAB308;
  }

  .alert_custom .list .item::after {
    content: "";
    position: absolute;
    width: 0;
    height: var(--line-height);
    background: #fff;
    bottom: 0;
    left: 0;
    animation: line 3s linear;
  }

  /* icon */
  .alert_custom .list .icon {
    flex: none;
    display: block;
    width: 40px;
    height: 40px;
  }

  .alert_custom .list .icon svg {
    width: 100%;
    height: 100%;
  }

  /* title */
  .alert_custom .list .title {
    min-width: 0;
    flex-grow: 1;
    margin-left: .5rem;
  }

  .alert_custom .list .title h6 {
    width: 100%;
    font-family: Arial, Helvetica, sans-serif !important;
    font-size: 14px !important;
    color: inherit !important;
    font-weight: bold;
    line-height: 1.5;
    margin: 0;
  }

  .alert_custom .list .title p {
    width: 100%;
    font-family: Arial, Helvetica, sans-serif !important;
    font-size: 12px !important;
    color: inherit !important;
    margin: 0rem !important;
    line-height: 1.5;
  }

  /* transiton */
  .transition_all {
    transition: all .3s ease-in-out;
  }

  .enter_start {
    transform: scale(0);
    opacity: 0;
  }

  .enter_end {
    transform: scale(1);
    opacity: 1;
  }

  .leave_start {
    transform: translateX(0);
    opacity: 1;
  }

  .leave_end {
    transform: translateX(100%);
    opacity: 0;
  }

  @keyframes line {
    from {
      width: 0;
    }

    to {
      width: 100%;
    }
  }
</style>

<div x-data="alert" class="alert_custom">
  <div class="list">
    <template x-for="item in list" :key="item.id">
      <div class="item" x-show="item.show" x-transition:enter="transition_all" x-transition:enter-start="enter_start"
        x-transition:enter-end="enter_end" x-transition:leave="transition_all" x-transition:leave-start="leave_start"
        x-transition:leave-end="leave_end" :class="item.type">
        <span class="icon">
          <template x-if="item.type == 'success'">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
              style="fill: currentColor">
              <path d="m10 15.586-3.293-3.293-1.414 1.414L10 18.414l9.707-9.707-1.414-1.414z"></path>
            </svg>
          </template>
          <template x-if="item.type == 'error'">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"
              style="fill: currentColor">
              <path
                d="M11.953 2C6.465 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.493 2 11.953 2zM12 20c-4.411 0-8-3.589-8-8s3.567-8 7.953-8C16.391 4 20 7.589 20 12s-3.589 8-8 8z">
              </path>
              <path d="M11 7h2v7h-2zm0 8h2v2h-2z"></path>
            </svg>
          </template>
        </span>
        <div class="title">
          <h6 class="truncate" x-text="item.title"></h6>
          <p x-text="item.body"></p>
        </div>
      </div>
    </template>
  </div>
</div>

<script>
  document.addEventListener('alpine:init', () => {
    Alpine.data('alert', () => ({
      index: 0,
      list: [],
      init() {
        // this.addAlert({body: 'dsa'})
        let alert = JSON.parse(`@json(session()->get('alert'))`)
        
        if (alert)
          this.addAlert(alert)
      },
      addAlert(alert) {
        this.list = [...JSON.parse(JSON.stringify(this.list)), {
          id: ++this.index,
          type: alert.type,
          title: alert.title,
          body: alert.body,
          show: false
        }]

        this.$nextTick(() => {
          this.list[this.index - 1].show = true
        })

        setTimeout(() => {
          this.list[this.index - 1].show = false
        }, 3000);
      }
    }))
  })
</script>
@endsection