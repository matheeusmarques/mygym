<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{asset('assets/js/libs/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/sweetalerts/sweetalert2.min.js')}}"></script>
<script src="{{asset('plugins/sweetalerts/custom-sweetalert.js')}}"></script>
<script src="{{asset('plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>

@if ($page_name != 'coming_soon' && $page_name != 'contact_us' && $page_name != 'error404' && $page_name != 'error500' && $page_name != 'error503' && $page_name != 'faq' && $page_name != 'helpdesk' && $page_name != 'maintenence' && $page_name != 'privacy' && $page_name != 'auth_boxed' && $page_name != 'auth_default')
  <script src="{{asset('plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
  <script src="{{asset('assets/js/app.js')}}"></script>
  <script>
  $(document).ready(function() {
    App.init();
  });
</script>
<script src="{{asset('assets/js/scrollspyNav.js')}}"></script>
<script src="{{asset('plugins/highlight/highlight.pack.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
@endif
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
@switch($page_name)
  @case('dashboard')
  {{-- Dashboard --}}
  <script src="{{asset('plugins/apex/apexcharts.min.js')}}"></script>
  <script src="{{asset('assets/js/dashboard/dash_1.js')}}"></script>
  @break

  @case('sales')
  {{-- Dashboard 2 --}}
  <script src="{{asset('plugins/apex/apexcharts.min.js')}}"></script>
  <script src="{{asset('assets/js/dashboard/dash_1.js')}}"></script>
  @break

  @case('calendar')
  {{-- App Calendar --}}
  <script src="{{asset('plugins/fullcalendar/moment.min.js')}}"></script>
  <script src="{{asset('plugins/flatpickr/flatpickr.js')}}"></script>
  <script src="{{asset('plugins/fullcalendar/fullcalendar.min.js')}}"></script>
  <script src="{{asset('plugins/fullcalendar/custom-fullcalendar.advance.js')}}"></script>
  @break

  @case('chat')
  {{-- App Chat --}}
  <script src="{{asset('assets/js/apps/mailbox-chat.js')}}"></script>
  @break

  @case('contacts')
  {{-- App Contact --}}
  <script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
  <script src="{{asset('assets/js/apps/contact.js')}}"></script>
  @break

  @case('invoice')
  {{-- App Invoice --}}
  <script src="{{asset('assets/js/apps/invoice.js')}}"></script>
  @break

  @case('mailbox')
  {{-- App Mailbox --}}
  <script src="{{asset('assets/js/ie11fix/fn.fix-padStart.js')}}"></script>
  <script src="{{asset('plugins/editors/quill/quill.js')}}"></script>
  <script src="{{asset('plugins/sweetalerts/sweetalert2.min.js')}}"></script>
  <script src="{{asset('plugins/notification/snackbar/snackbar.min.js')}}"></script>
  <script src="{{asset('assets/js/apps/custom-mailbox.js')}}"></script>
  @break

  @case('notes')
  {{-- App Notes --}}
  <script src="{{asset('assets/js/ie11fix/fn.fix-padStart.js')}}"></script>
  <script src="{{asset('assets/js/apps/notes.js')}}"></script>
  @break

  @case('scrumboard')
  {{-- App Scrumboard --}}
  <script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
  <script src="{{asset('assets/js/ie11fix/fn.fix-padStart.js')}}"></script>
  <script src="{{asset('assets/js/apps/scrumboard.js')}}"></script>
  @break

  @case('todo-list')
  {{-- App Todo List --}}
  <script src="{{asset('assets/js/ie11fix/fn.fix-padStart.js')}}"></script>
  <script src="{{asset('plugins/editors/quill/quill.js')}}"></script>
  <script src="{{asset('assets/js/apps/todoList.js')}}"></script>
  @break

  @case('auth_boxed')
  {{-- Auth Lockscreen Boxed --}}
  <script src="{{asset('assets/js/authentication/form-2.js')}}"></script>
  @break

  @case('auth_default')
  {{-- Auth Lockscreen --}}
  <script src="{{asset('assets/js/authentication/form-1.js')}}"></script>
  @break

  @case('charts')
  {{-- Apex Chart --}}
  <script src="{{asset('assets/js/scrollspyNav.js')}}"></script>
  <script src="{{asset('plugins/apex/apexcharts.min.js')}}"></script>
  <script src="{{asset('plugins/apex/custom-apexcharts.js')}}"></script>
  @break

  @case('accordions')
  {{-- Components Accordion --}}
  <script src="{{asset('assets/js/scrollspyNav.js')}}"></script>
  <script src="{{asset('assets/js/components/ui-accordions.js')}}"></script>
  @break

  @case('blockui')
  {{-- Components Block UI --}}
  <script src="{{asset('assets/js/scrollspyNav.js')}}"></script>
  <script src="{{asset('plugins/blockui/jquery.blockUI.min.js')}}"></script>
  <script src="{{asset('plugins/blockui/custom-blockui.js')}}"></script>
  @break

  @case('bootstrap_carousel')
  {{-- Components Bootstrap Carousel --}}
  <script src="{{asset('assets/js/scrollspyNav.js')}}"></script>
  @break

  @case('countdown')
  {{-- Components Countdown --}}
  <script src="{{asset('assets/js/scrollspyNav.js')}}"></script>
  <script src="{{asset('plugins/countdown/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('assets/js/components/custom-countdown.js')}}"></script>
  @break

  @case('counter')
  <script src="{{asset('assets/js/scrollspyNav.js')}}"></script>
  <script src="{{asset('plugins/counter/jquery.countTo.js')}}"></script>
  <script src="{{asset('assets/js/components/custom-counter.js')}}"></script>
  @break

  @case('lightbox')
  {{-- Components Lightbox --}}
  <script src="{{asset('plugins/lightbox/photoswipe.min.js')}}"></script>
  <script src="{{asset('plugins/lightbox/photoswipe-ui-default.min.js')}}"></script>
  <script src="{{asset('plugins/lightbox/custom-photswipe.js')}}"></script>
  @break

  @case('modals')
  {{-- Components Modal --}}
  <script>
  $('#yt-video-link').click(function () {
    var src = 'https://www.youtube.com/embed/YE7VzlLtp-4';
    $('#videoMedia1').modal('show');
    $('<iframe>').attr({
      'src': src,
      'width': '560',
      'height': '315',
      'allow': 'encrypted-media'
    }).css('border', '0').appendTo('#videoMedia1 .video-container');
  });
  $('#vimeo-video-link').click(function () {
    var src = 'https://player.vimeo.com/video/1084537';
    $('#videoMedia2').modal('show');
    $('<iframe>').attr({
      'src': src,
      'width': '560',
      'height': '315',
      'allow': 'encrypted-media'
    }).css('border', '0').appendTo('#videoMedia2 .video-container');
  });
  $('#videoMedia1 button, #videoMedia2 button').click(function () {
    $('#videoMedia1 iframe, #videoMedia2 iframe').removeAttr('src');
  });
  </script>
  @break


  @case('pricing_table')
  {{-- Components Pricing Tables --}}
  <script>
  var getInputStatus = document.getElementById('radio-6');
  var getPricingContainer = document.getElementsByClassName('pricing-plans-container')[0];
  var getYearlySwitch = document.getElementsByClassName('billed-yearly-radio')[0];
  getInputStatus.addEventListener('change', function() {
    var isChecked = getInputStatus.checked;
    if (isChecked) {
      getPricingContainer.classList.add("billed-yearly");
      getYearlySwitch.classList.add("billed-yearly-switch");
    } else {
      getYearlySwitch.classList.remove("billed-yearly-switch");
      getPricingContainer.classList.remove("billed-yearly");
    }
  })
  </script>
  @break

  @case('session_timeout')
  {{-- Compoentnts session timeout --}}
  <script src="{{asset('assets/js/components/session-timeout/bootstrap-session-timeout.js')}}"></script>
  <script src="{{asset('assets/js/components/session-timeout/custom-bootstrap_session_timeout.js')}}"></script>
  @break

  @case('notifications')
  {{-- Compoents Snackbar --}}
  <script src="{{asset('assets/js/scrollspyNav.js')}}"></script>
  <script src="{{asset('plugins/notification/snackbar/snackbar.min.js')}}"></script>
  <script src="{{asset('assets/js/components/notification/custom-snackbar.js')}}"></script>
  <script>
  // Get the Toast button
  var toastButton = document.getElementById("toast-btn");
  // Get the Toast element
  var toastElement = document.getElementsByClassName("toast")[0];

  toastButton.onclick = function() {
    $('.toast').toast('show');
  }
  </script>
  @break

  @case('sweet_alerts')
  {{-- Components Sweetalerts --}}
  <script src="{{asset('assets/js/scrollspyNav.js')}}"></script>
  <script src="{{asset('plugins/sweetalerts/sweetalert2.min.js')}}"></script>
  <script src="{{asset('plugins/sweetalerts/custom-sweetalert.js')}}"></script>
  @break

  @case('tabs')
  {{-- Components Tabs --}}
  <script src="{{asset('assets/js/scrollspyNav.js')}}"></script>
  @break

  @case('drag_n_drop')
  {{-- Drag and Drop ----> Dragula --}}
  <script src="{{asset('plugins/drag-and-drop/dragula/dragula.min.js')}}"></script>
  <script src="{{asset('plugins/drag-and-drop/dragula/custom-dragula.js')}}"></script>
  @break

  @case('badges')
  {{-- Elements Badges --}}
  <script src="{{asset('assets/js/scrollspyNav.js')}}"></script>
  <script src="{{asset('plugins/tagInput/tags-input.js')}}"></script>
  <script>
  var instance = new TagsInput({
    selector: 'skill-input'
  });
  instance.addData(['PHP', 'Wordpress', 'Javascript', 'jQuery'])
  </script>
  @break

  @case('popovers')
  {{-- Element popovers --}}
  <script src="{{asset('assets/js/elements/popovers.js')}}"></script>
  @break

  @case('search')
  {{-- Elements Serach --}}
  <script src="{{asset('assets/js/elements/custom-search.js')}}"></script>
  @break

  @case('tooltips')
  {{-- Elemnets Tooltips --}}
  <script src="{{asset('assets/js/elements/tooltip.js')}}"></script>
  @break

  @case('treeview')
  {{-- Elements Treeview --}}
  <script src="{{asset('plugins/treeview/custom-jstree.js')}}"></script>
  <script src="{{asset('assets/js/scrollspyNav.js')}}"></script>
  @break

  @case('font_icons')
  <script src="{{asset('plugins/font-icons/feather/feather.min.js')}}"></script>
  <script type="text/javascript">
  feather.replace();
  </script>
  @break

  @case('maps')
  {{-- Maps Jvector --}}
  <script src="{{asset('assets/js/scrollspyNav.js')}}"></script>
  <script src="{{asset('plugins/jvector/jquery-jvectormap-2.0.3.min.js')}}"></script>
  <script src="{{asset('plugins/jvector/africa/jquery-jvectormap-africa-en.js')}}"></script>
  <script src="{{asset('plugins/jvector/asia/jquery-jvectormap-asia-en.js')}}"></script>
  <script src="{{asset('plugins/jvector/continents/jquery-jvectormap-continents-en.js')}}"></script>
  <script src="{{asset('plugins/jvector/europe/jquery-jvectormap-europe-en.js')}}"></script>
  <script src="{{asset('plugins/jvector/north_america/jquery-jvectormap-north-america-en.js')}}"></script>
  <script src="{{asset('plugins/jvector/oceania/jquery-jvectormap-oceanina-en.js')}}"></script>
  <script src="{{asset('plugins/jvector/south-america/jquery-jvectormap-south-america-en.js')}}"></script>
  <script src="{{asset('plugins/jvector/worldmap_script/jquery-jvectormap-world-mill-en.js')}}"></script>
  <script src="{{asset('plugins/jvector/jvector_script.js')}}"></script>
  @break

  @case('coming_soon')
  {{-- Pages Coming Soon --}}
  <script src="{{asset('assets/js/pages/coming-soon/coming-soon.js')}}"></script>
  @break


  @case('contact_us')
  {{-- Pages Contact Us --}}
  <script>

  function getHeight() {
    var getMapElement = document.getElementById('basic_map1');
    var getWindowHeight = window.innerHeight;
    var setHeightOfMap = getMapElement.style.height = getWindowHeight + 'px';

  }
  getHeight();

  window.addEventListener('resize', function(event){
    getHeight();
  })

  function initMap() {
    var myLatLng = {lat: 48.864716, lng: 2.349014};

    var map = new google.maps.Map(document.getElementById('basic_map1'), {
      center: myLatLng,
      zoom: 8,
      minZoom: 5,
      maxZoom: 8,
      disableDefaultUI: true,
      styles : [
        {
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#a6c0ff"
            }
          ]
        },
        {
          "elementType": "labels",
          "stylers": [
            {
              "color": "#6de84f"
            },
            {
              "visibility": "off"
            }
          ]
        },
        {
          "elementType": "labels.icon",
          "stylers": [
            {
              "visibility": "off"
            }
          ]
        },
        {
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#616161"
            }
          ]
        },
        {
          "elementType": "labels.text.stroke",
          "stylers": [
            {
              "color": "#f1f2f3"
            }
          ]
        },
        {
          "featureType": "administrative",
          "elementType": "geometry",
          "stylers": [
            {
              "visibility": "off"
            }
          ]
        },
        {
          "featureType": "administrative.land_parcel",
          "stylers": [
            {
              "visibility": "off"
            }
          ]
        },
        {
          "featureType": "administrative.land_parcel",
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#bdbdbd"
            }
          ]
        },
        {
          "featureType": "administrative.neighborhood",
          "stylers": [
            {
              "visibility": "off"
            }
          ]
        },
        {
          "featureType": "poi",
          "stylers": [
            {
              "visibility": "off"
            }
          ]
        },
        {
          "featureType": "poi",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#eeeeee"
            }
          ]
        },
        {
          "featureType": "poi",
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#757575"
            }
          ]
        },
        {
          "featureType": "poi.park",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#e5e5e5"
            }
          ]
        },
        {
          "featureType": "poi.park",
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#9e9e9e"
            }
          ]
        },
        {
          "featureType": "road",
          "stylers": [
            {
              "color": "#fbf7fa"
            }
          ]
        },
        {
          "featureType": "road",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#c2d5ff"
            }
          ]
        },
        {
          "featureType": "road",
          "elementType": "labels",
          "stylers": [
            {
              "color": "#81a0f5"
            }
          ]
        },
        {
          "featureType": "road",
          "elementType": "labels.icon",
          "stylers": [
            {
              "visibility": "off"
            }
          ]
        },
        {
          "featureType": "road.arterial",
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#757575"
            }
          ]
        },
        {
          "featureType": "road.highway",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#e9f5f2"
            },
            {
              "visibility": "on"
            }
          ]
        },
        {
          "featureType": "road.highway",
          "elementType": "geometry.fill",
          "stylers": [
            {
              "color": "#c2d5ff"
            },
            {
              "visibility": "on"
            }
          ]
        },
        {
          "featureType": "road.highway",
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#616161"
            }
          ]
        },
        {
          "featureType": "road.local",
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#9e9e9e"
            }
          ]
        },
        {
          "featureType": "transit",
          "stylers": [
            {
              "visibility": "off"
            }
          ]
        },
        {
          "featureType": "transit.line",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#e5e5e5"
            }
          ]
        },
        {
          "featureType": "transit.station",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#eeeeee"
            }
          ]
        },
        {
          "featureType": "water",
          "elementType": "geometry",
          "stylers": [
            {
              "color": "#3b3f5c"
            }
          ]
        },
        {
          "featureType": "water",
          "elementType": "labels.text.fill",
          "stylers": [
            {
              "color": "#9e9e9e"
            }
          ]
        }
      ]

    });

    var marker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      title: 'Hello World!',
      icon: "{{asset('storage/img/contact-us-map-pin.svg')}}"
    });
  }
  </script>
  <script src="{{asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyDoOlJCERKYB1Cp-C89_sscNkelSfeeBnw&callback=initMap')}}" async defer></script>
  @break


  @case('faq')
  {{-- Pages FAQ --}}
  <script src="{{asset('assets/js/pages/faq/faq.js')}}"></script>
  @break

  @case('faq2')
  {{-- Pages FAQ2 --}}
  <script src="{{asset('assets/js/pages/faq/faq2.js')}}"></script>
  @break

  @case('helpdesk')
  {{-- Pages Helpdesk --}}
  <script src="{{asset('assets/js/pages/helpdesk.js')}}"></script>
  @break

  @case('privacy')
  {{-- Pages Privacy --}}
  <script>
  // Scroll To Top
  $(document).on('click', '.arrow', function(event) {
    event.preventDefault();
    var body = $("html, body");
    body.stop().animate({scrollTop:0}, 500, 'swing');
  });
  </script>
  @break

  @case('bootstrap_basic_table')
  {{-- Table Basic --}}
  <script src="{{asset('assets/js/scrollspyNav.js')}}"></script>
  <script>
  checkall('todoAll', 'todochkbox');
  $('[data-toggle="tooltip"]').tooltip()
  </script>
  @break

  @case('alternative_pagination')
  {{-- Table Datatable Alternative Pagination --}}
  <script src="{{asset('plugins/table/datatable/datatables.js')}}"></script>
  <script>
  $(document).ready(function() {
    $('#alter_pagination').DataTable( {
      "pagingType": "full_numbers",
      "oLanguage": {
        "oPaginate": {
          "sFirst": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg>',
          "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
          "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>',
          "sLast": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>'
        },
        "sInfo": "Showing page _PAGE_ of _PAGES_",
        "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
        "sSearchPlaceholder": "Search...",
        "sLengthMenu": "Results :  _MENU_",
      },
      "stripeClasses": [],
      "lengthMenu": [7, 10, 20, 50],
      "pageLength": 7
    });
  } );
  </script>
  @break

  @case('basic-light')
  {{-- Table Datatable Basic Light --}}
  <script src="{{asset('plugins/table/datatable/datatables.js')}}"></script>
  <script>
  $('#zero-config').DataTable({
    "oLanguage": {
      "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
      "sInfo": "Showing page _PAGE_ of _PAGES_",
      "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
      "sSearchPlaceholder": "Search...",
      "sLengthMenu": "Results :  _MENU_",
    },
    "stripeClasses": [],
    "lengthMenu": [7, 10, 20, 50],
    "pageLength": 7
  });
  </script>
  @break

  @case('all-clients')
  @include('admin.users.clients.edit')
  @include('admin.users.clients.create')
  @include('admin.users.clients.cdn')
  @include('admin.users.clients.invoice')
  {{-- Table Datatable Basic Light --}}
  <script src="{{asset('plugins/table/datatable/datatables.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
  <script>
  $('#zero-config').DataTable({
    oLanguage: {
      oPaginate: { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
      sInfo: "Mostrando _PAGE_ de _PAGES_",
      sSearch: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
      sSearchPlaceholder: "Procurar...",
      sLengthMenu: "Resultados :  _MENU_",
    },
    stripeClasses: [],
    lengthMenu: [7, 10, 20, 50],
    pageLength: 7,
    processing: true,
    responsive: true,
    responsive: true,
    serverSide: true,
    order: [[ 0, "desc" ]],
    ajax:{
      url:  "{{ url('/api/admin/clientes/getdata') }}",
    },
    columns:[
      {
        data: 'id',
        name: 'id'
      },
      {
        data: 'name',
        name: 'name'
      },
      {
        data: 'email',
        name: 'email'
      },
      {
        data: 'package_id',
        name: 'package_id'
      },
      {
        data: 'status',
        name: 'status'
      },
      {
        data: 'created_at',
        name: 'created_at'
      },
      {
        data: 'package_valid_until',
        name: 'package_valid_until'
      },
      {
        data: 'action',
        name: 'action'
      }
    ]
  });

  </script>
  {{-- Forms Bootstrap Select --}}
  <script src="{{asset('assets/js/scrollspyNav.js')}}"></script>
  <script>
  $(document).ready(function() {
    $('#modal-new-user').on('show.bs.modal', function (event) {
      $("#cities").hide();
      $("#package option").remove(); // Remove all <option> child tags.
      $.getJSON("{{url('api/admin/pacotes/getdatajson')}}", null, function(data) {
        $.each(data.packages, function(index, item) { // Iterates through a collection
          $("#package").append( // Append an object to the inside of the select box
            $("<option></option>") // Yes you can do this.
            .text(item.name)
            .val(item.id)
          );
        });
      });

      $("#state option").remove(); // Remove all <option> child tags.
      $("#state").append( // Append an object to the inside of the select box
        $("<option>Selecione um estado</option>") // Yes you can do this.
        .text('Selecione um estado')
        .val('0')
      );
      $.getJSON("{{url('api/admin/estados/getdatajson')}}", null, function(data) {
        $.each(data.states, function(index, item) { // Iterates through a collection
          $("#state").append( // Append an object to the inside of the select box
            $("<option></option>") // Yes you can do this.
            .text(item.name)
            .val(item.id)
          );
        });
      });

      $('#state').on('change', function() {
        $("#cities").show();
        console.log( this.value );
        $("#city option").remove(); // Remove all <option> child tags.
        $.getJSON("{{url('api/admin/estados/')}}"+'/'+this.value, null, function(data) {
          $.each(data.cities, function(index, item) { // Iterates through a collection
            $("#city").append( // Append an object to the inside of the select box
              $("<option></option>") // Yes you can do this.
              .text(item.name)
              .val(item.id)
            );
          });
        });
      });

      var modal = $(this);

      modal.find('#birthday').mask('00/00/0000');
      modal.find('#cellphone').mask('(00) 0 0000-0000');

      $("#city option").remove(); // Remove all <option> child tags.
      $.getJSON("{{url('api/admin/cidades/getdatajson')}}", null, function(data) {
        $.each(data.cities, function(index, item) { // Iterates through a collection
          $("#city").append( // Append an object to the inside of the select box
            $("<option></option>") // Yes you can do this.
            .text(item.name)
            .val(item.id)
          );
        });
      });

    });

    $('#modal-generate-invoice').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget);
      var user_id = button.data('id');
      var modal = $(this);
      modal.find('#user_id').attr('value', user_id);

      $("#package_invoice option").remove(); // Remove all <option> child tags.
      $.getJSON("{{url('api/admin/pacotes/getdatajson')}}", null, function(data) {
        $.each(data.packages, function(index, item) { // Iterates through a collection
          $("#package_invoice").append( // Append an object to the inside of the select box
            $("<option></option>") // Yes you can do this.
            .text(item.name)
            .val(item.id)
          );
        });
      });
    });

    $("#form-new-user").submit(function(event) {
      event.preventDefault();

      $("#form-new-user [name='birthday']").unmask();
      $("#form-new-user [name='cellphone']").unmask();

      $.ajax(
        {
          type: 'POST',
          url:  "{{ url('/api/customer/new') }}",
          data: $('#form-new-user').serialize(),
          success: function(response)
          {
            $('#modal-new-user').modal('toggle');
            if(response.status == 200){
              $('#form-new-user')[0].reset();
              $('#zero-config').DataTable().ajax.reload();
              swal({
                title: 'OK!',
                text: "Cadastrado com sucesso!",
                type: 'success',
                padding: '2em'
              })
            }else {
              swal({
                title: 'Erro!',
                text: "Tente novamente!",
                type: 'error',
                padding: '2em'
              })
            }
          },
          error: function()
          {
            console.log(data.serialize);
          }
        });

      });

      $("#form-generate-invoice").submit(function(event) {
        event.preventDefault();
        $.ajax(
          {
            type: 'POST',
            url:  "{{ url('/api/admin/clientes/gerarfatura') }}",
            data: $('#form-generate-invoice').serialize(),
            success: function(response)
            {
              $('#modal-generate-invoice').modal('toggle');
              if(response.status == 200){
                $('#form-generate-invoice')[0].reset();
                $('#zero-config').DataTable().ajax.reload();
                swal({
                  title: 'OK!',
                  text: "Gerado com sucesso!",
                  type: 'success',
                  padding: '2em'
                })
              }else {
                swal({
                  title: 'Erro!',
                  text: "Tente novamente!",
                  type: 'error',
                  padding: '2em'
                })
              }
            },
            error: function()
            {
              console.log(data.serialize);
            }
          });

        });

        $('#modal-edit-user').on('show.bs.modal', function (event) {
          var modal = $(this);

          modal.find('#form-edit-user input').unmask();

          var button = $(event.relatedTarget);
          var package_id = button.data('package_id');
          $('#form-edit-user')[0].reset();
          $("#package_id option").remove(); // Remove all <option> child tags.

          $.getJSON("{{url('api/admin/pacotes/getdatajson')}}", null, function(data) {
            console.log('teste json1');
            $.each(data.packages, function(index, item) { // Iterates through a collection
              if(item.id == package_id){
                $("#package_id").append( // Append an object to the inside of the select box
                  $("<option selected='true'></option>") // Yes you can do this.
                  .text(item.name)
                  .val(item.id)
                );
              }else {
                $("#package_id").append( // Append an object to the inside of the select box
                  $("<option></option>") // Yes you can do this.
                  .text(item.name)
                  .val(item.id)
                );
              }
            });
          });

          var id = button.data('id');
          var name = button.data('name');
          var email = button.data('email');
          var cellphone = button.data('cellphone');
          var birthday = button.data('birthday');
          var package_valid_until = button.data('package_valid_until');
          var role = button.data('role');
          var is_trial = button.data('is_trial');
          var status = button.data('status');




          $("#modal-edit-user #package_idd option[value='5']").attr('selected', 'selected');

          modal.find('#id').attr('value', id);
          modal.find('#role option[value="'+role+'"]').attr('selected', 'true');
          modal.find('#status option[value="'+status+'"]').attr('selected', 'true');
          modal.find('#is_trial option[value="'+is_trial+'"]').attr('selected', 'true');
          modal.find('#name').attr('value', name);
          modal.find('#package_valid_until').attr('value', package_valid_until);
          modal.find('#email').attr('value', email);
          modal.find('#cellphone').attr('value', cellphone);
          modal.find('#birthday').attr('value', birthday);

          modal.find('#birthday').mask('00/00/0000');
          modal.find('#cellphone').mask('(00) 0 0000-0000');
        });


        $('#modal-delete-user').on('show.bs.modal', function (event) {
          $('#form-delete-package')[0].reset();
          var button = $(event.relatedTarget);
          var id = button.data('id');
          var name = button.data('name');


          var modal = $(this);
          modal.find('#id').attr('value', id);
          modal.find('#name').attr('value', name);
        });

        $("#form-edit-user").submit(function(event) {
          event.preventDefault();
          $("#form-edit-user [name='birthday']").unmask();
          $("#form-edit-user [name='cellphone']").unmask();
          $.ajax(
            {
              type: 'POST',
              url:  "{{ url('api/admin/clientes/editar') }}",
              data: $('#form-edit-user').serialize(),
              success: function(response)
              {
                $('#modal-edit-user').modal('toggle');
                if(response.status == 200){
                  $('#form-edit-user')[0].reset();
                  $('#zero-config').DataTable().ajax.reload();
                  swal({
                    title: 'OK!',
                    text: "Atualizado com sucesso!",
                    type: 'success',
                    padding: '2em'
                  })
                }else {
                  swal({
                    title: 'Erro!',
                    text: "Tente novamente!",
                    type: 'error',
                    padding: '2em'
                  })
                  $("#form-edit-user [name='birthday']").mask();
                  $("#form-edit-user [name='cellphone']").mask();
                }
              },
              error: function()
              {
                swal({
                  title: 'Erro!',
                  text: "Tente novamente!",
                  type: 'error',
                  padding: '2em'
                })
                $("#form-edit-user [name='birthday']").mask();
                $("#form-edit-user [name='cellphone']").mask();
              }
            });

          });
        });
        </script>
        @break

        @case('active-clients')
        @include('admin.users.clients.edit')
        @include('admin.users.clients.create')
        @include('admin.users.clients.cdn')
        @include('admin.users.clients.invoice')
        {{-- Table Datatable Basic Light --}}
        <script src="{{asset('plugins/table/datatable/datatables.js')}}"></script>
        <script>
        $('#zero-config').DataTable({
          oLanguage: {
            oPaginate: { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
            sInfo: "Mostrando _PAGE_ de _PAGES_",
            sSearch: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
            sSearchPlaceholder: "Procurar...",
            sLengthMenu: "Resultados :  _MENU_",
          },
          stripeClasses: [],
          lengthMenu: [7, 10, 20, 50],
          pageLength: 7,
          processing: true,
          responsive: true,
          responsive: true,
          serverSide: true,
          order: [[ 0, "desc" ]],
          ajax:{
            url:  "{{ url('/api/clientes/getdataactive') }}",
          },
          columns:[
            {
              data: 'id',
              name: 'id'
            },
            {
              data: 'name',
              name: 'name'
            },
            {
              data: 'email',
              name: 'email'
            },
            {
              data: 'status',
              name: 'status'
            },
            {
              data: 'created_at',
              name: 'created_at'
            },
            {
              data: 'package_valid_until',
              name: 'package_valid_until'
            },
            {
              data: 'action',
              name: 'action'
            }
          ]
        });

        </script>
        {{-- Forms Bootstrap Select --}}
        <script src="{{asset('assets/js/scrollspyNav.js')}}"></script>
        <script src="{{asset('plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>
        @include('admin.users.clients.create')
        <script>
        $(document).ready(function() {
          $('#modal-new-user').on('show.bs.modal', function (event) {
            $("#package option").remove(); // Remove all <option> child tags.
            $.getJSON("{{url('api/pacotes/clientes/getdatajson')}}", null, function(data) {
              $.each(data.packages, function(index, item) { // Iterates through a collection
                $("#package").append( // Append an object to the inside of the select box
                  $("<option></option>") // Yes you can do this.
                  .text(item.name)
                  .val(item.id)
                );
              });
            });
          });

          $('#modal-generate-invoice').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var id = button.data('id');
            var modal = $(this);
            modal.find('#id').attr('value', id);

            $("#package_invoice option").remove(); // Remove all <option> child tags.
            $.getJSON("{{url('api/pacotes/clientes/getdatajson')}}", null, function(data) {
              $.each(data.packages, function(index, item) { // Iterates through a collection
                $("#package_invoice").append( // Append an object to the inside of the select box
                  $("<option></option>") // Yes you can do this.
                  .text(item.name)
                  .val(item.id)
                );
              });
            });
          });

          $("#form-generate-invoice").submit(function(event) {
            event.preventDefault();
            $.ajax(
              {
                type: 'POST',
                url:  "{{ url('/api/clientes/gerarfatura') }}",
                data: $('#form-generate-invoice').serialize(),
                success: function(response)
                {
                  $('#modal-generate-invoice').modal('toggle');
                  if(response.status == 200){
                    $('#form-generate-invoice')[0].reset();
                    $('#zero-config').DataTable().ajax.reload();
                    swal({
                      title: 'OK!',
                      text: "Gerado com sucesso!",
                      type: 'success',
                      padding: '2em'
                    })
                  }else {
                    swal({
                      title: 'Erro!',
                      text: "Tente novamente!",
                      type: 'error',
                      padding: '2em'
                    })
                  }
                },
                error: function()
                {
                  console.log(data.serialize);
                }
              });

            });

            $('#modal-cdn').on('show.bs.modal', function (event) {
              var button = $(event.relatedTarget);

              var is_cdn_active = button.data('is_cdn_active');
              var id = button.data('id');
              var email = button.data('email');
              console.log(is_cdn_active);
              var message;
              var modal = $(this);

              if(is_cdn_active == 0){
                var message = 'A CDN serve para melhorar o desempenho das streams, é recomendado deixar a mesma ativada, desative somente se o seu cliente estiver reclamando de travamentos. Deseja ativar para o usuário ';
              }else {
                var message = 'A CDN serve para melhorar o desempenho das streams, é recomendado deixar a mesma ativada, desative somente se o seu cliente estiver reclamando de travamentos. Deseja desativar para o usuário ';
              }
              modal.find('#id').attr('value', id);

              modal.find('#message').text(message);
              modal.find('#username').text(email);

            });


            $("#form-cdn").submit(function(event) {
              event.preventDefault();
              $.ajax(
                {
                  type: 'POST',
                  url:  "{{ url('/api/clientes/cdn') }}",
                  data: $('#form-cdn').serialize(),
                  success: function(response)
                  {
                    console.log(response);
                    console.log(response.status);
                    console.log(response.message);
                    $('#modal-cdn').modal('toggle');
                    if(response.status == 200){
                      $('#form-cdn')[0].reset();
                      $('#zero-config').DataTable().ajax.reload();
                      swal({
                        title: 'OK!',
                        text: "Executado com sucesso!",
                        type: 'success',
                        padding: '2em'
                      })
                    }else {
                      swal({
                        title: 'Erro!',
                        text: "Tente novamente!",
                        type: 'error',
                        padding: '2em'
                      })
                    }
                  },
                  error: function()
                  {
                    console.log(data.serialize);
                  }
                });

              });

              $("#form-new-user").submit(function(event) {
                event.preventDefault();
                $.ajax(
                  {
                    type: 'POST',
                    url:  "{{ url('/api/usuario/novo') }}",
                    data: $('#form-new-user').serialize(),
                    success: function(response)
                    {
                      $('#modal-new-user').modal('toggle');
                      if(response.status == 200){
                        $('#form-new-user')[0].reset();
                        $('#zero-config').DataTable().ajax.reload();
                        swal({
                          title: 'OK!',
                          text: "Cadastrado com sucesso!",
                          type: 'success',
                          padding: '2em'
                        })
                      }else {
                        swal({
                          title: 'Erro!',
                          text: "Tente novamente!",
                          type: 'error',
                          padding: '2em'
                        })
                      }
                    },
                    error: function()
                    {
                      console.log(data.serialize);
                    }
                  });

                });

                $('#modal-edit-user').on('show.bs.modal', function (event) {
                  var button = $(event.relatedTarget);
                  var package_id = button.data('package_id');
                  $('#form-edit-user')[0].reset();

                  $("#package_id option").remove(); // Remove all <option> child tags.
                  console.log('teste json');
                  // event.preventDefault();
                  $.getJSON("{{url('api/pacotes/clientes/getdatajson')}}", null, function(data) {
                    console.log('teste json1');
                    $.each(data.packages, function(index, item) { // Iterates through a collection
                      if(item.id == package_id){
                        $("#package_id").append( // Append an object to the inside of the select box
                          $("<option selected='true'></option>") // Yes you can do this.
                          .text(item.name)
                          .val(item.id)
                        );
                      }else {
                        $("#package_id").append( // Append an object to the inside of the select box
                          $("<option></option>") // Yes you can do this.
                          .text(item.name)
                          .val(item.id)
                        );
                      }
                    });
                  });

                  var id = button.data('id');
                  var name = button.data('name');
                  var email = button.data('email');
                  var cellphone = button.data('cellphone');
                  var package_valid_until = button.data('package_valid_until');
                  var role = button.data('role');
                  var is_trial = button.data('is_trial');
                  var status = button.data('status');


                  var modal = $(this);

                  // modal.find('#package_id [value="'+package_id+'"]').attr('selected', true);
                  // modal.find("#package_id").val(package_id);
                  $("#modal-edit-user #package_idd option[value='5']").attr('selected', 'selected');
                  // $("#package_id option[value="+package_id+"]").attr('selected', 'true');
                  console.log(package_id+'esse');
                  // document.getElementById('package_id').value = package_id;
                  modal.find('#id').attr('value', id);
                  modal.find('#role option[value="'+role+'"]').attr('selected', 'true');
                  modal.find('#status option[value="'+status+'"]').attr('selected', 'true');
                  modal.find('#is_trial option[value="'+is_trial+'"]').attr('selected', 'true');
                  modal.find('#name').attr('value', name);
                  modal.find('#package_valid_until').attr('value', package_valid_until);
                  modal.find('#email').attr('value', email);
                  modal.find('#cellphone').attr('value', cellphone);
                });


                $('#modal-delete-user').on('show.bs.modal', function (event) {
                  $('#form-delete-package')[0].reset();
                  var button = $(event.relatedTarget);
                  var id = button.data('id');
                  var name = button.data('name');


                  var modal = $(this);
                  modal.find('#id').attr('value', id);
                  modal.find('#name').attr('value', name);
                });

                $("#form-edit-user").submit(function(event) {
                  event.preventDefault();
                  $.ajax(
                    {
                      type: 'POST',
                      url:  "{{ url('api/clientes/editar') }}",
                      data: $('#form-edit-user').serialize(),
                      success: function(response)
                      {
                        $('#modal-edit-user').modal('toggle');
                        if(response.status == 200){
                          $('#form-edit-user')[0].reset();
                          $('#zero-config').DataTable().ajax.reload();
                          swal({
                            title: 'OK!',
                            text: "Atualizado com sucesso!",
                            type: 'success',
                            padding: '2em'
                          })
                        }else {
                          swal({
                            title: 'Erro!',
                            text: "Tente novamente!",
                            type: 'error',
                            padding: '2em'
                          })
                        }
                      },
                      error: function()
                      {
                        swal({
                          title: 'Erro!',
                          text: "Tente novamente!",
                          type: 'error',
                          padding: '2em'
                        })
                      }
                    });

                  });
                });
                </script>
                @break

                @case('inactive-clients')
                @include('admin.users.clients.edit')
                @include('admin.users.clients.create')
                @include('admin.users.clients.cdn')
                @include('admin.users.clients.invoice')
                {{-- Table Datatable Basic Light --}}
                <script src="{{asset('plugins/table/datatable/datatables.js')}}"></script>
                <script>
                $('#zero-config').DataTable({
                  oLanguage: {
                    oPaginate: { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                    sInfo: "Mostrando _PAGE_ de _PAGES_",
                    sSearch: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                    sSearchPlaceholder: "Procurar...",
                    sLengthMenu: "Resultados :  _MENU_",
                  },
                  stripeClasses: [],
                  lengthMenu: [7, 10, 20, 50],
                  pageLength: 7,
                  processing: true,
                  responsive: true,
                  responsive: true,
                  serverSide: true,
                  order: [[ 0, "desc" ]],
                  ajax:{
                    url:  "{{ url('/api/clientes/getdatainactive') }}",
                  },
                  columns:[
                    {
                      data: 'id',
                      name: 'id'
                    },
                    {
                      data: 'name',
                      name: 'name'
                    },
                    {
                      data: 'email',
                      name: 'email'
                    },
                    {
                      data: 'status',
                      name: 'status'
                    },
                    {
                      data: 'created_at',
                      name: 'created_at'
                    },
                    {
                      data: 'package_valid_until',
                      name: 'package_valid_until'
                    },
                    {
                      data: 'action',
                      name: 'action'
                    }
                  ]
                });

                </script>
                {{-- Forms Bootstrap Select --}}
                <script src="{{asset('assets/js/scrollspyNav.js')}}"></script>
                <script src="{{asset('plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>
                @include('admin.users.clients.create')
                <script>
                $(document).ready(function() {
                  $('#modal-new-user').on('show.bs.modal', function (event) {
                    $("#package option").remove(); // Remove all <option> child tags.
                    $.getJSON("{{url('api/pacotes/clientes/getdatajson')}}", null, function(data) {
                      $.each(data.packages, function(index, item) { // Iterates through a collection
                        $("#package").append( // Append an object to the inside of the select box
                          $("<option></option>") // Yes you can do this.
                          .text(item.name)
                          .val(item.id)
                        );
                      });
                    });
                  });

                  $('#modal-generate-invoice').on('show.bs.modal', function (event) {
                    var button = $(event.relatedTarget);
                    var id = button.data('id');
                    var modal = $(this);
                    modal.find('#id').attr('value', id);

                    $("#package_invoice option").remove(); // Remove all <option> child tags.
                    $.getJSON("{{url('api/pacotes/clientes/getdatajson')}}", null, function(data) {
                      $.each(data.packages, function(index, item) { // Iterates through a collection
                        $("#package_invoice").append( // Append an object to the inside of the select box
                          $("<option></option>") // Yes you can do this.
                          .text(item.name)
                          .val(item.id)
                        );
                      });
                    });
                  });

                  $("#form-generate-invoice").submit(function(event) {
                    event.preventDefault();
                    $.ajax(
                      {
                        type: 'POST',
                        url:  "{{ url('/api/clientes/gerarfatura') }}",
                        data: $('#form-generate-invoice').serialize(),
                        success: function(response)
                        {
                          $('#modal-generate-invoice').modal('toggle');
                          if(response.status == 200){
                            $('#form-generate-invoice')[0].reset();
                            $('#zero-config').DataTable().ajax.reload();
                            swal({
                              title: 'OK!',
                              text: "Gerado com sucesso!",
                              type: 'success',
                              padding: '2em'
                            })
                          }else {
                            swal({
                              title: 'Erro!',
                              text: "Tente novamente!",
                              type: 'error',
                              padding: '2em'
                            })
                          }
                        },
                        error: function()
                        {
                          console.log(data.serialize);
                        }
                      });

                    });

                    $('#modal-cdn').on('show.bs.modal', function (event) {
                      var button = $(event.relatedTarget);

                      var is_cdn_active = button.data('is_cdn_active');
                      var id = button.data('id');
                      var email = button.data('email');
                      console.log(is_cdn_active);
                      var message;
                      var modal = $(this);

                      if(is_cdn_active == 0){
                        var message = 'A CDN serve para melhorar o desempenho das streams, é recomendado deixar a mesma ativada, desative somente se o seu cliente estiver reclamando de travamentos. Deseja ativar para o usuário ';
                      }else {
                        var message = 'A CDN serve para melhorar o desempenho das streams, é recomendado deixar a mesma ativada, desative somente se o seu cliente estiver reclamando de travamentos. Deseja desativar para o usuário ';
                      }
                      modal.find('#id').attr('value', id);

                      modal.find('#message').text(message);
                      modal.find('#username').text(email);

                    });


                    $("#form-cdn").submit(function(event) {
                      event.preventDefault();
                      $.ajax(
                        {
                          type: 'POST',
                          url:  "{{ url('/api/clientes/cdn') }}",
                          data: $('#form-cdn').serialize(),
                          success: function(response)
                          {
                            console.log(response);
                            console.log(response.status);
                            console.log(response.message);
                            $('#modal-cdn').modal('toggle');
                            if(response.status == 200){
                              $('#form-cdn')[0].reset();
                              $('#zero-config').DataTable().ajax.reload();
                              swal({
                                title: 'OK!',
                                text: "Executado com sucesso!",
                                type: 'success',
                                padding: '2em'
                              })
                            }else {
                              swal({
                                title: 'Erro!',
                                text: "Tente novamente!",
                                type: 'error',
                                padding: '2em'
                              })
                            }
                          },
                          error: function()
                          {
                            console.log(data.serialize);
                          }
                        });

                      });

                      $("#form-new-user").submit(function(event) {
                        event.preventDefault();
                        $.ajax(
                          {
                            type: 'POST',
                            url:  "{{ url('/api/usuario/novo') }}",
                            data: $('#form-new-user').serialize(),
                            success: function(response)
                            {
                              $('#modal-new-user').modal('toggle');
                              if(response.status == 200){
                                $('#form-new-user')[0].reset();
                                $('#zero-config').DataTable().ajax.reload();
                                swal({
                                  title: 'OK!',
                                  text: "Cadastrado com sucesso!",
                                  type: 'success',
                                  padding: '2em'
                                })
                              }else {
                                swal({
                                  title: 'Erro!',
                                  text: "Tente novamente!",
                                  type: 'error',
                                  padding: '2em'
                                })
                              }
                            },
                            error: function()
                            {
                              console.log(data.serialize);
                            }
                          });

                        });

                        $('#modal-edit-user').on('show.bs.modal', function (event) {
                          var button = $(event.relatedTarget);
                          var package_id = button.data('package_id');
                          $('#form-edit-user')[0].reset();

                          $("#package_id option").remove(); // Remove all <option> child tags.
                          console.log('teste json');
                          // event.preventDefault();
                          $.getJSON("{{url('api/pacotes/clientes/getdatajson')}}", null, function(data) {
                            console.log('teste json1');
                            $.each(data.packages, function(index, item) { // Iterates through a collection
                              if(item.id == package_id){
                                $("#package_id").append( // Append an object to the inside of the select box
                                  $("<option selected='true'></option>") // Yes you can do this.
                                  .text(item.name)
                                  .val(item.id)
                                );
                              }else {
                                $("#package_id").append( // Append an object to the inside of the select box
                                  $("<option></option>") // Yes you can do this.
                                  .text(item.name)
                                  .val(item.id)
                                );
                              }
                            });
                          });

                          var id = button.data('id');
                          var name = button.data('name');
                          var email = button.data('email');
                          var cellphone = button.data('cellphone');
                          var package_valid_until = button.data('package_valid_until');
                          var role = button.data('role');
                          var is_trial = button.data('is_trial');
                          var status = button.data('status');


                          var modal = $(this);

                          // modal.find('#package_id [value="'+package_id+'"]').attr('selected', true);
                          // modal.find("#package_id").val(package_id);
                          $("#modal-edit-user #package_idd option[value='5']").attr('selected', 'selected');
                          // $("#package_id option[value="+package_id+"]").attr('selected', 'true');
                          console.log(package_id+'esse');
                          // document.getElementById('package_id').value = package_id;
                          modal.find('#id').attr('value', id);
                          modal.find('#role option[value="'+role+'"]').attr('selected', 'true');
                          modal.find('#status option[value="'+status+'"]').attr('selected', 'true');
                          modal.find('#is_trial option[value="'+is_trial+'"]').attr('selected', 'true');
                          modal.find('#name').attr('value', name);
                          modal.find('#package_valid_until').attr('value', package_valid_until);
                          modal.find('#email').attr('value', email);
                          modal.find('#cellphone').attr('value', cellphone);
                        });


                        $('#modal-delete-user').on('show.bs.modal', function (event) {
                          $('#form-delete-package')[0].reset();
                          var button = $(event.relatedTarget);
                          var id = button.data('id');
                          var name = button.data('name');


                          var modal = $(this);
                          modal.find('#id').attr('value', id);
                          modal.find('#name').attr('value', name);
                        });

                        $("#form-edit-user").submit(function(event) {
                          event.preventDefault();
                          $.ajax(
                            {
                              type: 'POST',
                              url:  "{{ url('api/clientes/editar') }}",
                              data: $('#form-edit-user').serialize(),
                              success: function(response)
                              {
                                $('#modal-edit-user').modal('toggle');
                                if(response.status == 200){
                                  $('#form-edit-user')[0].reset();
                                  $('#zero-config').DataTable().ajax.reload();
                                  swal({
                                    title: 'OK!',
                                    text: "Atualizado com sucesso!",
                                    type: 'success',
                                    padding: '2em'
                                  })
                                }else {
                                  swal({
                                    title: 'Erro!',
                                    text: "Tente novamente!",
                                    type: 'error',
                                    padding: '2em'
                                  })
                                }
                              },
                              error: function()
                              {
                                swal({
                                  title: 'Erro!',
                                  text: "Tente novamente!",
                                  type: 'error',
                                  padding: '2em'
                                })
                              }
                            });

                          });
                        });
                        </script>
                        @break

                        @case('clients-invoices')
                        @include('admin.invoices.clients.invoice')
                        {{-- Table Datatable Basic Light --}}
                        <script src="{{asset('plugins/table/datatable/datatables.js')}}"></script>
                        <script>
                        $('#zero-config').DataTable({
                          oLanguage: {
                            oPaginate: { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                            sInfo: "Mostrando _PAGE_ de _PAGES_",
                            sSearch: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                            sSearchPlaceholder: "Procurar...",
                            sLengthMenu: "Resultados :  _MENU_",
                          },
                          stripeClasses: [],
                          lengthMenu: [7, 10, 20, 50],
                          pageLength: 7,
                          processing: true,
                          responsive: true,
                          responsive: true,
                          serverSide: true,
                          order: [[ 0, "desc" ]],
                          ajax:{
                            url:  "{{ url('/api/faturas/getdataclients') }}",
                          },
                          columns:[
                            {
                              data: 'id',
                              name: 'id'
                            },
                            {
                              data: 'user_id',
                              name: 'user_id'
                            },
                            {
                              data: 'package_id',
                              name: 'package_id'
                            },
                            {
                              data: 'price',
                              name: 'price'
                            },
                            {
                              data: 'method',
                              name: 'method'
                            },
                            {
                              data: 'created_at',
                              name: 'created_at'
                            },
                            {
                              data: 'status',
                              name: 'status'
                            },
                            {
                              data: 'action',
                              name: 'action'
                            }
                          ]
                        });

                        </script>

                        <script>
                        $(document).ready(function() {

                          $('#modal-approve-invoice').on('show.bs.modal', function (event) {
                            var button = $(event.relatedTarget);
                            var id = button.data('id');
                            var modal = $(this);
                            modal.find('#invoice_id').attr('value', id);

                          });
                          $("#form-approve-invoice").submit(function(event) {
                            event.preventDefault();
                            $.ajax(
                              {
                                type: 'POST',
                                url:  "{{ url('/api/clientes/aprovarfatura') }}",
                                data: $('#form-approve-invoice').serialize(),
                                success: function(response)
                                {
                                  $('#modal-approve-invoice').modal('toggle');
                                  if(response.status == 200){
                                    $('#form-approve-invoice')[0].reset();
                                    $('#zero-config').DataTable().ajax.reload();
                                    swal({
                                      title: 'OK!',
                                      text: "Gerado com sucesso!",
                                      type: 'success',
                                      padding: '2em'
                                    })
                                  }else {
                                    swal({
                                      title: 'Erro!',
                                      text: "Tente novamente!",
                                      type: 'error',
                                      padding: '2em'
                                    })
                                  }
                                },
                                error: function()
                                {
                                  console.log(data.serialize);
                                }
                              });

                            });

                          });
                          </script>
                          {{-- Forms Bootstrap Select --}}
                          <script src="{{asset('assets/js/scrollspyNav.js')}}"></script>
                          <script src="{{asset('plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>
                        });
                      </script>
                      @break

                      @case('resellers-invoices')
                      @include('admin.invoices.resellers.invoice')
                      {{-- Table Datatable Basic Light --}}
                      <script src="{{asset('plugins/table/datatable/datatables.js')}}"></script>
                      <script>
                      $('#zero-config').DataTable({
                        oLanguage: {
                          oPaginate: { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                          sInfo: "Mostrando _PAGE_ de _PAGES_",
                          sSearch: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                          sSearchPlaceholder: "Procurar...",
                          sLengthMenu: "Resultados :  _MENU_",
                        },
                        stripeClasses: [],
                        lengthMenu: [7, 10, 20, 50],
                        pageLength: 7,
                        processing: true,
                        responsive: true,
                        responsive: true,
                        serverSide: true,
                        order: [[ 0, "desc" ]],
                        ajax:{
                          url:  "{{ url('/api/faturas/getdataresellers') }}",
                        },
                        columns:[
                          {
                            data: 'id',
                            name: 'id'
                          },
                          {
                            data: 'user_id',
                            name: 'user_id'
                          },
                          {
                            data: 'package_id',
                            name: 'package_id'
                          },
                          {
                            data: 'price',
                            name: 'price'
                          },
                          {
                            data: 'method',
                            name: 'method'
                          },
                          {
                            data: 'created_at',
                            name: 'created_at'
                          },
                          {
                            data: 'status',
                            name: 'status'
                          },
                          {
                            data: 'action',
                            name: 'action'
                          }
                        ]
                      });

                      </script>
                      <script>
                      $(document).ready(function() {

                        $('#modal-approve-invoice').on('show.bs.modal', function (event) {
                          var button = $(event.relatedTarget);
                          var id = button.data('id');
                          var modal = $(this);
                          modal.find('#invoice_id').attr('value', id);

                        });
                        $("#form-approve-invoice").submit(function(event) {
                          event.preventDefault();
                          $.ajax(
                            {
                              type: 'POST',
                              url:  "{{ url('/api/revendedores/master/aprovarfatura') }}",
                              data: $('#form-approve-invoice').serialize(),
                              success: function(response)
                              {
                                $('#modal-approve-invoice').modal('toggle');
                                if(response.status == 200){
                                  $('#form-approve-invoice')[0].reset();
                                  $('#zero-config').DataTable().ajax.reload();
                                  swal({
                                    title: 'OK!',
                                    text: "Gerado com sucesso!",
                                    type: 'success',
                                    padding: '2em'
                                  })
                                }else {
                                  swal({
                                    title: 'Erro!',
                                    text: "Tente novamente!",
                                    type: 'error',
                                    padding: '2em'
                                  })
                                }
                              },
                              error: function()
                              {
                                console.log(data.serialize);
                              }
                            });

                          });

                        });
                        </script>
                        {{-- Forms Bootstrap Select --}}
                        <script src="{{asset('assets/js/scrollspyNav.js')}}"></script>
                        <script src="{{asset('plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>
                      });
                    </script>
                    @break


                    @case('admin')
                    @include('admin.users.admin.edit')
                    @include('admin.users.admin.create')
                    {{-- Table Datatable Basic Light --}}
                    <script src="{{asset('plugins/table/datatable/datatables.js')}}"></script>
                    <script>
                    $('#zero-config').DataTable({
                      oLanguage: {
                        oPaginate: { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                        sInfo: "Mostrando _PAGE_ de _PAGES_",
                        sSearch: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                        sSearchPlaceholder: "Procurar...",
                        sLengthMenu: "Resultados :  _MENU_",
                      },
                      stripeClasses: [],
                      lengthMenu: [7, 10, 20, 50],
                      pageLength: 7,
                      processing: true,
                      responsive: true,
                      responsive: true,
                      serverSide: true,
                      order: [[ 0, "desc" ]],
                      ajax:{
                        url:  "{{ url('/api/administradores/getdata') }}",
                      },
                      columns:[
                        {
                          data: 'id',
                          name: 'id'
                        },
                        {
                          data: 'name',
                          name: 'name'
                        },
                        {
                          data: 'email',
                          name: 'email'
                        },
                        {
                          data: 'status',
                          name: 'status'
                        },
                        {
                          data: 'created_at',
                          name: 'created_at'
                        },
                        {
                          data: 'action',
                          name: 'action'
                        }
                      ]
                    });

                    </script>
                    {{-- Forms Bootstrap Select --}}
                    <script src="{{asset('assets/js/scrollspyNav.js')}}"></script>
                    <script src="{{asset('plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>
                    <script>
                    $(document).ready(function() {
                      $("#form-new-user").submit(function(event) {
                        event.preventDefault();
                        $.ajax(
                          {
                            type: 'POST',
                            url:  "{{ url('/api/administradores/novo') }}",
                            data: $('#form-new-user').serialize(),
                            success: function(response)
                            {
                              $('#modal-new-user').modal('toggle');
                              if(response.status == 200){
                                $('#form-new-user')[0].reset();
                                $('#zero-config').DataTable().ajax.reload();
                                swal({
                                  title: 'OK!',
                                  text: "Cadastrado com sucesso!",
                                  type: 'success',
                                  padding: '2em'
                                })
                              }else {
                                swal({
                                  title: 'Erro!',
                                  text: "Tente novamente!",
                                  type: 'error',
                                  padding: '2em'
                                })
                              }
                            },
                            error: function()
                            {
                              console.log(data.serialize);
                            }
                          });

                        });

                        $('#modal-edit-user').on('show.bs.modal', function (event) {
                          var button = $(event.relatedTarget);
                          $('#form-edit-user')[0].reset();

                          var id = button.data('id');
                          var name = button.data('name');
                          var email = button.data('email');
                          var cellphone = button.data('cellphone');
                          var status = button.data('status');


                          var modal = $(this);



                          modal.find('#id').attr('value', id);
                          modal.find('#status option[value="'+status+'"]').attr('selected', 'true');
                          modal.find('#name').attr('value', name);
                          modal.find('#email').attr('value', email);
                          modal.find('#cellphone').attr('value', cellphone);
                        });

                        $('#modal-edit-credits').on('show.bs.modal', function (event) {
                          var button = $(event.relatedTarget);
                          $('#form-edit-credits')[0].reset();

                          var id = button.data('id');
                          var credits = button.data('credits');
                          var email = button.data('email');

                          var modal = $(this);



                          modal.find('#id').attr('value', id);
                          modal.find('#credits').attr('value', credits);
                          modal.find('#email').attr('value', email);
                        });


                        $('#modal-delete-user').on('show.bs.modal', function (event) {
                          $('#form-delete-package')[0].reset();
                          var button = $(event.relatedTarget);
                          var id = button.data('id');
                          var name = button.data('name');


                          var modal = $(this);
                          modal.find('#id').attr('value', id);
                          modal.find('#name').attr('value', name);
                        });

                        $("#form-edit-user").submit(function(event) {
                          event.preventDefault();
                          $.ajax(
                            {
                              type: 'POST',
                              url:  "{{ url('api/administradores/editar') }}",
                              data: $('#form-edit-user').serialize(),
                              success: function(response)
                              {
                                $('#modal-edit-user').modal('toggle');
                                if(response.status == 200){
                                  $('#form-edit-user')[0].reset();
                                  $('#zero-config').DataTable().ajax.reload();
                                  swal({
                                    title: 'OK!',
                                    text: "Atualizado com sucesso!",
                                    type: 'success',
                                    padding: '2em'
                                  })
                                }else {
                                  swal({
                                    title: 'Erro!',
                                    text: "Tente novamente!",
                                    type: 'error',
                                    padding: '2em'
                                  })
                                }
                              },
                              error: function()
                              {
                                swal({
                                  title: 'Erro!',
                                  text: "Tente novamente!",
                                  type: 'error',
                                  padding: '2em'
                                })
                              }
                            });

                          });
                        });
                        </script>
                        @break


                        @case('resell-packages')
                        @include('admin.packages.edit_resell')
                        @include('admin.packages.create_resell')
                        @include('admin.packages.delete_resell')
                        {{-- Table Datatable Basic Light --}}
                        <script src="{{asset('plugins/table/datatable/datatables.js')}}"></script>
                        <script>
                        $('#zero-config').DataTable({
                          oLanguage: {
                            oPaginate: { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                            sInfo: "Mostrando _PAGE_ de _PAGES_",
                            sSearch: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                            sSearchPlaceholder: "Procurar...",
                            sLengthMenu: "Resultados :  _MENU_",
                          },
                          stripeClasses: [],
                          lengthMenu: [7, 10, 20, 50],
                          pageLength: 7,
                          processing: true,
                          responsive: true,
                          responsive: true,
                          serverSide: true,
                          order: [[ 0, "desc" ]],
                          ajax:{
                            url:  "{{ url('/api/pacotes/revenda/getdata') }}",
                          },
                          columns:[
                            {
                              data: 'id',
                              name: 'id'
                            },
                            {
                              data: 'name',
                              name: 'name'
                            },
                            {
                              data: 'description',
                              name: 'description'
                            },
                            {
                              data: 'quantity',
                              name: 'quantity'
                            },
                            {
                              data: 'price',
                              name: 'price'
                            },
                            {
                              data: 'status',
                              name: 'status'
                            },
                            {
                              data: 'action',
                              name: 'action'
                            }
                          ]
                        });

                        $('#modal-edit-package').on('show.bs.modal', function (event) {
                          $('#form-edit-package')[0].reset();
                          $('#status').prop('selectedIndex',0);
                          var button = $(event.relatedTarget);
                          var id = button.data('id');
                          var name = button.data('name');
                          var description = button.data('description');
                          var price = button.data('price');
                          var quantity = button.data('quantity');
                          var status = button.data('status');

                          var modal = $(this);
                          modal.find('[value="0"]').attr('selected', false);
                          modal.find('[value="1"]').attr('selected', false);
                          modal.find('#id').attr('value', id);
                          modal.find('#name').attr('value', name);
                          modal.find('#description').attr('value', description);
                          modal.find('#price').attr('value', price);
                          modal.find('#quantity').attr('value', quantity);
                          modal.find('[value="'+status+'"]').attr('selected', true);
                        });


                        $('#modal-delete-package').on('show.bs.modal', function (event) {
                          $('#form-delete-package')[0].reset();
                          var button = $(event.relatedTarget);
                          var id = button.data('id');
                          var name = button.data('name');


                          var modal = $(this);
                          modal.find('#id').attr('value', id);
                          modal.find('#name').attr('value', name);
                        });

                        $("#form-edit-package").submit(function(event) {
                          event.preventDefault();
                          $.ajax(
                            {
                              type: 'POST',
                              url:  "{{ url('api/pacotes/revenda/editar') }}",
                              data: $('#form-edit-package').serialize(),
                              success: function(response)
                              {
                                $('#modal-edit-package').modal('toggle');
                                if(response.status == 200){
                                  $('#form-edit-package')[0].reset();
                                  $('#zero-config').DataTable().ajax.reload();
                                  swal({
                                    title: 'OK!',
                                    text: "Atualizado com sucesso!",
                                    type: 'success',
                                    padding: '2em'
                                  })
                                }else {
                                  swal({
                                    title: 'Erro!',
                                    text: "Tente novamente!",
                                    type: 'error',
                                    padding: '2em'
                                  })
                                }
                              },
                              error: function()
                              {
                                swal({
                                  title: 'Erro!',
                                  text: "Tente novamente!",
                                  type: 'error',
                                  padding: '2em'
                                })
                              }
                            });

                          });

                          $("#form-new-package").submit(function(event) {
                            event.preventDefault();
                            $.ajax(
                              {
                                type: 'POST',
                                url:  "{{ url('api/pacotes/revenda/novo') }}",
                                data: $('#form-new-package').serialize(),
                                success: function(response)
                                {
                                  $('#modal-new-package').modal('toggle');
                                  if(response.status == 200){
                                    $('#form-new-package')[0].reset();
                                    $('#zero-config').DataTable().ajax.reload();
                                    swal({
                                      title: 'OK!',
                                      text: "Adicionado com sucesso!",
                                      type: 'success',
                                      padding: '2em'
                                    })
                                  }else {
                                    swal({
                                      title: 'Erro!',
                                      text: "Tente novamente!",
                                      type: 'error',
                                      padding: '2em'
                                    })
                                  }
                                },
                                error: function()
                                {
                                  swal({
                                    title: 'Erro!',
                                    text: "Tente novamente!",
                                    type: 'error',
                                    padding: '2em'
                                  })
                                }
                              });

                            });

                            $("#form-delete-package").submit(function(event) {
                              event.preventDefault();
                              $.ajax(
                                {
                                  type: 'POST',
                                  url:  "{{ url('api/pacotes/revenda/deletar') }}",
                                  data: $('#form-delete-package').serialize(),
                                  success: function(response)
                                  {
                                    $('#modal-delete-package').modal('toggle');
                                    if(response.status == 200){
                                      $('#form-delete-package')[0].reset();
                                      $('#zero-config').DataTable().ajax.reload();
                                      swal({
                                        title: 'OK!',
                                        text: "Deletado com sucesso!",
                                        type: 'success',
                                        padding: '2em'
                                      })
                                    }else {
                                      swal({
                                        title: 'Erro!',
                                        text: "Tente novamente!",
                                        type: 'error',
                                        padding: '2em'
                                      })
                                    }
                                  },
                                  error: function()
                                  {
                                    swal({
                                      title: 'Erro!',
                                      text: "Tente novamente!",
                                      type: 'error',
                                      padding: '2em'
                                    })
                                  }
                                });

                              });


                              </script>
                              {{-- Forms Bootstrap Select --}}
                              <script src="{{asset('assets/js/scrollspyNav.js')}}"></script>
                              <script src="{{asset('plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>
                              @break

                              @case('states')
                              @include('admin.states.edit')
                              @include('admin.states.delete')
                              @include('admin.states.create')
                              {{-- Table Datatable Basic Light --}}
                              <script src="{{asset('plugins/table/datatable/datatables.js')}}"></script>
                              <script>
                              $('#zero-config').DataTable({
                                oLanguage: {
                                  oPaginate: { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                                  sInfo: "Mostrando _PAGE_ de _PAGES_",
                                  sSearch: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                                  sSearchPlaceholder: "Procurar...",
                                  sLengthMenu: "Resultados :  _MENU_",
                                },
                                stripeClasses: [],
                                lengthMenu: [7, 10, 20, 50],
                                pageLength: 7,
                                processing: true,
                                responsive: true,
                                responsive: true,
                                serverSide: true,
                                order: [[ 0, "desc" ]],
                                ajax:{
                                  url:  "{{ url('/api/admin/estados/getdata') }}",
                                },
                                columns:[
                                  {
                                    data: 'id',
                                    name: 'id'
                                  },
                                  {
                                    data: 'name',
                                    name: 'name'
                                  },
                                  {
                                    data: 'acronym',
                                    name: 'acronym'
                                  },
                                  {
                                    data: 'action',
                                    name: 'action'
                                  }
                                ]
                              });

                              $('#modal-edit-state').on('show.bs.modal', function (event) {
                                $('#form-edit-state')[0].reset();
                                var button = $(event.relatedTarget);
                                var id = button.data('id');
                                var name = button.data('name');
                                var acronym = button.data('acronym');

                                var modal = $(this);
                                modal.find('[value="0"]').attr('selected', false);
                                modal.find('[value="1"]').attr('selected', false);
                                modal.find('#id').attr('value', id);
                                modal.find('#name').attr('value', name);
                                modal.find('#acronym').attr('value', acronym);
                              });


                              $('#modal-delete-state').on('show.bs.modal', function (event) {
                                $('#form-delete-state')[0].reset();
                                var button = $(event.relatedTarget);
                                var id = button.data('id');
                                var name = button.data('name');


                                var modal = $(this);
                                modal.find('#id').attr('value', id);
                                modal.find('#name').text(name);
                              });

                              $("#form-edit-state").submit(function(event) {
                                event.preventDefault();
                                $.ajax(
                                  {
                                    type: 'POST',
                                    url:  "{{ url('api/admin/estados/editar') }}",
                                    data: $('#form-edit-state').serialize(),
                                    success: function(response)
                                    {
                                      $('#modal-edit-state').modal('toggle');
                                      if(response.status == 200){
                                        $('#form-edit-state')[0].reset();
                                        $('#zero-config').DataTable().ajax.reload();
                                        swal({
                                          title: 'OK!',
                                          text: "Atualizado com sucesso!",
                                          type: 'success',
                                          padding: '2em'
                                        })
                                      }else {
                                        swal({
                                          title: 'Erro!',
                                          text: "Tente novamente!",
                                          type: 'error',
                                          padding: '2em'
                                        })
                                      }
                                    },
                                    error: function()
                                    {
                                      swal({
                                        title: 'Erro!',
                                        text: "Tente novamente!",
                                        type: 'error',
                                        padding: '2em'
                                      })
                                    }
                                  });

                                });

                                $("#form-new-state").submit(function(event) {
                                  event.preventDefault();
                                  $.ajax(
                                    {
                                      type: 'POST',
                                      url:  "{{ url('api/admin/estados/criar') }}",
                                      data: $('#form-new-state').serialize(),
                                      success: function(response)
                                      {
                                        $('#modal-new-state').modal('toggle');
                                        if(response.status == 200){
                                          $('#form-new-state')[0].reset();
                                          $('#zero-config').DataTable().ajax.reload();
                                          swal({
                                            title: 'OK!',
                                            text: "Adicionado com sucesso!",
                                            type: 'success',
                                            padding: '2em'
                                          })
                                        }else {
                                          swal({
                                            title: 'Erro!',
                                            text: "Tente novamente!",
                                            type: 'error',
                                            padding: '2em'
                                          })
                                        }
                                      },
                                      error: function()
                                      {
                                        swal({
                                          title: 'Erro!',
                                          text: "Tente novamente!",
                                          type: 'error',
                                          padding: '2em'
                                        })
                                      }
                                    });

                                  });

                                  $("#form-delete-state").submit(function(event) {
                                    event.preventDefault();
                                    $.ajax(
                                      {
                                        type: 'POST',
                                        url:  "{{ url('api/admin/estados/deletar') }}",
                                        data: $('#form-delete-state').serialize(),
                                        success: function(response)
                                        {
                                          $('#modal-delete-state').modal('toggle');
                                          if(response.status == 200){
                                            $('#form-delete-state')[0].reset();
                                            $('#zero-config').DataTable().ajax.reload();
                                            swal({
                                              title: 'OK!',
                                              text: "Deletado com sucesso!",
                                              type: 'success',
                                              padding: '2em'
                                            })
                                          }else {
                                            swal({
                                              title: 'Erro!',
                                              text: "Tente novamente!",
                                              type: 'error',
                                              padding: '2em'
                                            })
                                          }
                                        },
                                        error: function()
                                        {
                                          swal({
                                            title: 'Erro!',
                                            text: "Tente novamente!",
                                            type: 'error',
                                            padding: '2em'
                                          })
                                        }
                                      });

                                    });


                                    </script>
                                    {{-- Forms Bootstrap Select --}}
                                    <script src="{{asset('assets/js/scrollspyNav.js')}}"></script>
                                    <script src="{{asset('plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>
                                    @break

                                    @case('cities')
                                    @include('admin.cities.edit')
                                    @include('admin.cities.delete')
                                    @include('admin.cities.create')
                                    {{-- Table Datatable Basic Light --}}
                                    <script src="{{asset('plugins/table/datatable/datatables.js')}}"></script>
                                    <script>
                                    $('#zero-config').DataTable({
                                      oLanguage: {
                                        oPaginate: { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                                        sInfo: "Mostrando _PAGE_ de _PAGES_",
                                        sSearch: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                                        sSearchPlaceholder: "Procurar...",
                                        sLengthMenu: "Resultados :  _MENU_",
                                      },
                                      stripeClasses: [],
                                      lengthMenu: [7, 10, 20, 50],
                                      pageLength: 7,
                                      processing: true,
                                      responsive: true,
                                      responsive: true,
                                      serverSide: true,
                                      order: [[ 0, "desc" ]],
                                      ajax:{
                                        url:  "{{ url('/api/admin/cidades/getdata') }}",
                                      },
                                      columns:[
                                        {
                                          data: 'id',
                                          name: 'id'
                                        },
                                        {
                                          data: 'name',
                                          name: 'name'
                                        },
                                        {
                                          data: 'state_id',
                                          name: 'state_id'
                                        },
                                        {
                                          data: 'action',
                                          name: 'action'
                                        }
                                      ]
                                    });

                                    </script>
                                    <script>
                                    $(document).ready(function() {

                                      $('#modal-new-city').on('show.bs.modal', function (event) {
                                        $("#states_id option").remove(); // Remove all <option> child tags.
                                        var button = $(event.relatedTarget);
                                        var modal = $(this);

                                        $.getJSON("{{url('api/admin/estados/getdatajson')}}", null, function(data) {
                                          $.each(data.states, function(index, item) { // Iterates through a collection
                                            $("#states_id").append( // Append an object to the inside of the select box
                                              $("<option></option>") // Yes you can do this.
                                              .text(item.name)
                                              .val(item.id)
                                            );
                                          });
                                        });
                                      });

                                      $('#modal-edit-city').on('show.bs.modal', function (event) {
                                        var button = $(event.relatedTarget);
                                        var state_id = button.data('state_id');

                                        $('#form-edit-city')[0].reset();

                                        $("#state_id option").remove(); // Remove all <option> child tags.
                                        // event.preventDefault();
                                        $.getJSON("{{url('api/admin/estados/getdatajson')}}", null, function(data) {
                                          $.each(data.states, function(index, item) { // Iterates through a collection
                                            if(item.id == state_id){
                                              $("#state_id").append( // Append an object to the inside of the select box
                                                $("<option selected='true'></option>") // Yes you can do this.
                                                .text(item.name)
                                                .val(item.id)
                                              );
                                            }else {
                                              $("#state_id").append( // Append an object to the inside of the select box
                                                $("<option></option>") // Yes you can do this.
                                                .text(item.name)
                                                .val(item.id)
                                              );
                                            }
                                          });
                                        });

                                        var id = button.data('id');
                                        var name = button.data('name');

                                        var modal = $(this);
                                        modal.find('#id').attr('value', id);
                                        modal.find('#name').attr('value', name);
                                      });


                                      $('#modal-delete-city').on('show.bs.modal', function (event) {
                                        $('#form-delete-city')[0].reset();
                                        var button = $(event.relatedTarget);
                                        var id = button.data('id');
                                        var name = button.data('name');


                                        var modal = $(this);
                                        modal.find('#id').attr('value', id);
                                        modal.find('#name').text(name);
                                      });

                                      $("#form-edit-city").submit(function(event) {
                                        event.preventDefault();
                                        $.ajax(
                                          {
                                            type: 'POST',
                                            url:  "{{ url('api/admin/cidades/editar') }}",
                                            data: $('#form-edit-city').serialize(),
                                            success: function(response)
                                            {
                                              $('#modal-edit-city').modal('toggle');
                                              if(response.status == 200){
                                                $('#form-edit-city')[0].reset();
                                                $('#zero-config').DataTable().ajax.reload();
                                                swal({
                                                  title: 'OK!',
                                                  text: "Atualizado com sucesso!",
                                                  type: 'success',
                                                  padding: '2em'
                                                })
                                              }else {
                                                swal({
                                                  title: 'Erro!',
                                                  text: "Tente novamente!",
                                                  type: 'error',
                                                  padding: '2em'
                                                })
                                              }
                                            },
                                            error: function()
                                            {
                                              swal({
                                                title: 'Erro!',
                                                text: "Tente novamente!",
                                                type: 'error',
                                                padding: '2em'
                                              })
                                            }
                                          });

                                        });

                                        $("#form-new-city").submit(function(event) {
                                          event.preventDefault();
                                          $.ajax(
                                            {
                                              type: 'POST',
                                              url:  "{{ url('api/admin/cidades/criar') }}",
                                              data: $('#form-new-city').serialize(),
                                              success: function(response)
                                              {
                                                $('#modal-new-city').modal('toggle');
                                                if(response.status == 200){
                                                  $('#form-new-city')[0].reset();
                                                  $('#zero-config').DataTable().ajax.reload();
                                                  swal({
                                                    title: 'OK!',
                                                    text: "Adicionado com sucesso!",
                                                    type: 'success',
                                                    padding: '2em'
                                                  })
                                                }else {
                                                  swal({
                                                    title: 'Erro!',
                                                    text: "Tente novamente!",
                                                    type: 'error',
                                                    padding: '2em'
                                                  })
                                                }
                                              },
                                              error: function()
                                              {
                                                swal({
                                                  title: 'Erro!',
                                                  text: "Tente novamente!",
                                                  type: 'error',
                                                  padding: '2em'
                                                })
                                              }
                                            });

                                          });

                                          $("#form-delete-city").submit(function(event) {
                                            event.preventDefault();
                                            $.ajax(
                                              {
                                                type: 'POST',
                                                url:  "{{ url('api/cidades/deletar') }}",
                                                data: $('#form-delete-city').serialize(),
                                                success: function(response)
                                                {
                                                  $('#modal-delete-city').modal('toggle');
                                                  if(response.status == 200){
                                                    $('#form-delete-city')[0].reset();
                                                    $('#zero-config').DataTable().ajax.reload();
                                                    swal({
                                                      title: 'OK!',
                                                      text: "Deletado com sucesso!",
                                                      type: 'success',
                                                      padding: '2em'
                                                    })
                                                  }else {
                                                    swal({
                                                      title: 'Erro!',
                                                      text: "Tente novamente!",
                                                      type: 'error',
                                                      padding: '2em'
                                                    })
                                                  }
                                                },
                                                error: function()
                                                {
                                                  swal({
                                                    title: 'Erro!',
                                                    text: "Tente novamente!",
                                                    type: 'error',
                                                    padding: '2em'
                                                  })
                                                }
                                              });

                                            });

                                          });
                                          </script>
                                          {{-- Forms Bootstrap Select --}}
                                          <script src="{{asset('assets/js/scrollspyNav.js')}}"></script>
                                          <script src="{{asset('plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>
                                          @break

                                          @case('clients-packages')
                                          @include('admin.packages.edit')
                                          @include('admin.packages.create')
                                          @include('admin.packages.delete')
                                          {{-- Table Datatable Basic Light --}}
                                          <script src="{{asset('plugins/table/datatable/datatables.js')}}"></script>
                                          <script>
                                          $('#zero-config').DataTable({
                                            oLanguage: {
                                              oPaginate: { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                                              sInfo: "Mostrando _PAGE_ de _PAGES_",
                                              sSearch: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                                              sSearchPlaceholder: "Procurar...",
                                              sLengthMenu: "Resultados :  _MENU_",
                                            },
                                            stripeClasses: [],
                                            lengthMenu: [7, 10, 20, 50],
                                            pageLength: 7,
                                            processing: true,
                                            responsive: true,
                                            responsive: true,
                                            serverSide: true,
                                            order: [[ 0, "desc" ]],
                                            ajax:{
                                              url:  "{{ url('/api/admin/pacotes/getdata') }}",
                                            },
                                            columns:[
                                              {
                                                data: 'id',
                                                name: 'id'
                                              },
                                              {
                                                data: 'name',
                                                name: 'name'
                                              },
                                              {
                                                data: 'description',
                                                name: 'description'
                                              },
                                              {
                                                data: 'duration',
                                                name: 'duration'
                                              },
                                              {
                                                data: 'price',
                                                name: 'price'
                                              },
                                              {
                                                data: 'status',
                                                name: 'status'
                                              },
                                              {
                                                data: 'action',
                                                name: 'action'
                                              },
                                            ]
                                          });

                                          $('#modal-edit-package').on('show.bs.modal', function (event) {
                                            $('#form-edit-package')[0].reset();
                                            $('#status').prop('selectedIndex',0);
                                            var button = $(event.relatedTarget);
                                            var id = button.data('id');
                                            var name = button.data('name');
                                            var description = button.data('description');
                                            var price = button.data('price');
                                            var duration = button.data('duration');
                                            var status = button.data('status');

                                            var modal = $(this);
                                            modal.find('[value="0"]').attr('selected', false);
                                            modal.find('[value="1"]').attr('selected', false);
                                            modal.find('#id').attr('value', id);
                                            modal.find('#name').attr('value', name);
                                            modal.find('#description').attr('value', description);
                                            modal.find('#price').attr('value', price);
                                            modal.find('#duration').attr('value', duration);
                                            modal.find('[value="'+status+'"]').attr('selected', true);
                                          });


                                          $('#modal-delete-package').on('show.bs.modal', function (event) {
                                            $('#form-delete-package')[0].reset();
                                            var button = $(event.relatedTarget);
                                            var id = button.data('id');
                                            var name = button.data('name');


                                            var modal = $(this);
                                            modal.find('#id').attr('value', id);
                                            modal.find('#name').attr('value', name);
                                          });

                                          $("#form-edit-package").submit(function(event) {
                                            event.preventDefault();
                                            $.ajax(
                                              {
                                                type: 'POST',
                                                url:  "{{ url('api/admin/pacotes/editar') }}",
                                                data: $('#form-edit-package').serialize(),
                                                success: function(response)
                                                {
                                                  $('#modal-edit-package').modal('toggle');
                                                  if(response.status == 200){
                                                    $('#form-edit-package')[0].reset();
                                                    $('#zero-config').DataTable().ajax.reload();
                                                    swal({
                                                      title: 'OK!',
                                                      text: "Atualizado com sucesso!",
                                                      type: 'success',
                                                      padding: '2em'
                                                    })
                                                  }else {
                                                    swal({
                                                      title: 'Erro!',
                                                      text: "Tente novamente!",
                                                      type: 'error',
                                                      padding: '2em'
                                                    })
                                                  }
                                                },
                                                error: function()
                                                {
                                                  swal({
                                                    title: 'Erro!',
                                                    text: "Tente novamente!",
                                                    type: 'error',
                                                    padding: '2em'
                                                  })
                                                }
                                              });

                                            });

                                            $("#form-new-package").submit(function(event) {
                                              event.preventDefault();
                                              $.ajax(
                                                {
                                                  type: 'POST',
                                                  url:  "{{ url('api/admin/pacotes/criar') }}",
                                                  data: $('#form-new-package').serialize(),
                                                  success: function(response)
                                                  {
                                                    $('#modal-new-package').modal('toggle');
                                                    if(response.status == 200){
                                                      $('#form-new-package')[0].reset();
                                                      $('#zero-config').DataTable().ajax.reload();
                                                      swal({
                                                        title: 'OK!',
                                                        text: "Adicionado com sucesso!",
                                                        type: 'success',
                                                        padding: '2em'
                                                      })
                                                    }else {
                                                      swal({
                                                        title: 'Erro!',
                                                        text: "Tente novamente!",
                                                        type: 'error',
                                                        padding: '2em'
                                                      })
                                                    }
                                                  },
                                                  error: function()
                                                  {
                                                    swal({
                                                      title: 'Erro!',
                                                      text: "Tente novamente!",
                                                      type: 'error',
                                                      padding: '2em'
                                                    })
                                                  }
                                                });

                                              });

                                              $("#form-delete-package").submit(function(event) {
                                                event.preventDefault();
                                                $.ajax(
                                                  {
                                                    type: 'POST',
                                                    url:  "{{ url('api/admin/pacotes/deletar') }}",
                                                    data: $('#form-delete-package').serialize(),
                                                    success: function(response)
                                                    {
                                                      $('#modal-delete-package').modal('toggle');
                                                      if(response.status == 200){
                                                        $('#form-delete-package')[0].reset();
                                                        $('#zero-config').DataTable().ajax.reload();
                                                        swal({
                                                          title: 'OK!',
                                                          text: "Deletado com sucesso!",
                                                          type: 'success',
                                                          padding: '2em'
                                                        })
                                                      }else {
                                                        swal({
                                                          title: 'Erro!',
                                                          text: "Tente novamente!",
                                                          type: 'error',
                                                          padding: '2em'
                                                        })
                                                      }
                                                    },
                                                    error: function()
                                                    {
                                                      swal({
                                                        title: 'Erro!',
                                                        text: "Tente novamente!",
                                                        type: 'error',
                                                        padding: '2em'
                                                      })
                                                    }
                                                  });

                                                });


                                                </script>
                                                {{-- Forms Bootstrap Select --}}
                                                <script src="{{asset('assets/js/scrollspyNav.js')}}"></script>
                                                <script src="{{asset('plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>
                                                @break

                                                @case('geral-settings')
                                                {{-- User Account Setting  --}}
                                                <script src="{{asset('plugins/dropify/dropify.min.js')}}"></script>
                                                <script src="{{asset('plugins/blockui/jquery.blockUI.min.js')}}"></script>
                                                <script src="{{asset('assets/js/users/account-settings.js')}}"></script>

                                                <script>
                                                @isset($settings)
                                                var server_cdn = {{$settings->server_cdn}};
                                                @endisset
                                                $("#server_cdn option").remove();
                                                $.getJSON("{{url('api/get_servers')}}", null, function(data) {
                                                  $.each(data.servers, function(index, item) {
                                                    if(item.id == server_cdn){
                                                      $("#server_cdn").append(
                                                        $("<option selected='true'></option>")
                                                        .text(item.server_name)
                                                        .val(item.id)
                                                      );
                                                    }else {
                                                      $("#server_cdn").append(
                                                        $("<option></option>")
                                                        .text(item.server_name)
                                                        .val(item.id)
                                                      );
                                                    }
                                                  });
                                                });

                                                $("#form-settings").submit(function(event) {
                                                  event.preventDefault();
                                                  $.ajax(
                                                    {
                                                      type: 'POST',
                                                      url:  "{{ url('api/configuracoes/salvar') }}",
                                                      data: $('#form-settings').serialize(),
                                                      success: function(response)
                                                      {
                                                        $('#modal-settings').modal('toggle');
                                                        if(response.status == 200){
                                                          $('#form-settings')[0].reset();
                                                          swal({
                                                            title: 'OK!',
                                                            text: "Salvo com sucesso!",
                                                            type: 'success',
                                                            padding: '2em'
                                                          })
                                                          location.reload();
                                                        }else {
                                                          swal({
                                                            title: 'Erro!',
                                                            text: "Tente novamente!",
                                                            type: 'error',
                                                            padding: '2em'
                                                          })
                                                        }
                                                      },
                                                      error: function()
                                                      {
                                                        swal({
                                                          title: 'Erro!',
                                                          text: "Tente novamente!",
                                                          type: 'error',
                                                          padding: '2em'
                                                        })
                                                      }
                                                    });

                                                  });

                                                  </script>

                                                  @break
                                                  @default
                                                  <script>console.log('No custom script available.')</script>
                                                @endswitch
                                                <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
