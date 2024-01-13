	<!-- COMMON SCRIPTS -->
	<script src="{{ asset('frontend/js/common_scripts.min.js') }}"></script>
	<script src="{{ asset('frontend/js/common_func.js') }}"></script>
	<script src="{{ asset('frontend/assets/validate.js') }}"></script>

	<!-- SPECIFIC SCRIPTS -->
	<script src="{{ asset('frontend/js/sticky_sidebar.min.js') }}"></script>
	<script src="{{ asset('frontend/js/specific_listing.min.js') }}"></script>

	<!-- Map -->
	<script src="{{ asset('frontend/js/main_map_scripts.js') }}"></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>


    <script type="text/javascript">
        var ENDPOINT = "{{ route('ad_search') }}";
        let page = 1;
        let loading = false;

        window.onscroll = function() {
            if ($(window).scrollTop() + $(window).height() >= ($(document).height() - 20)) {
                // Check if already loading to prevent multiple requests
                if (!loading) {
                    loading = true;
                    page++;
                    loadMoreData(page);
                }
            }
        };

        function loadMoreData(page) {
            $.ajax({
                    url: ENDPOINT + "?page=" + page,
                    type: "get",
                    beforeSend: function() {
                        $('.ajax-load').show();
                    }
                })
                .done(function(data) {
                    if (data.html == "") {
                        $('.ajax-load').html("No more records found");
                        return;
                    }
                    $('.ajax-load').hide();
                    $("#ads-container").append(data.html);
                    loading = false;
                })
                .fail(function(jqXHR, ajaxOptions, thrownError) {
                    alert('server not responding...');
                });
        }
    </script>
