<x-app-layout>
    <div class="flex flex-col">
        <div class="sm:-mx-6 lg:-mx-8">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden ">
                    <table class="min-w-full">
                        <tr>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-1 text-center ">
                                <div class="row ">
                                    <form action="/buscar" method="get" id="search-form">
                                        <div class="col-md-3  btn btn-primary">
                                            <select style="width: 100%"
                                                    id="search" name="search">
                                            </select>
                                        </div>
                                    </form>
                                </div>
                            </th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center">
        <div class="block p-6 rounded-lg shadow-lg bg-white w-75 h-75 grid grid-cols-3">
            @foreach($suspects as $suspect)
                <a class="text-gray-700 text-base mb-3 font-medium" href="?search={{$suspect->name_suspect}}">
                    {{$suspect->name_suspect}}
                </a>
            @endforeach
        </div>
    </div>
    <script type="text/javascript">
        $('#search').select2({
            placeholder: 'Buscar',
            theme: "bootstrap-5",
            language: $.extend({},
                $.fn.select2.defaults.defaults.language, {
                    noResults: () => {
                        return $("<span></span>")
                    },
                    searching: () => {
                        return $("<span></span>")
                    },
                    errorLoading: () => {
                        return $("<span></span>")
                    },
                }),
            ajax: {
                url: '/select2',
                dataType: 'json',
                delay: 1,
                data: (params) => {
                    return {
                        q: params.term,
                        page: params.page
                    }
                },
                processResults: (data, params) => {
                    params.page = params.page || 1
                    return {
                        results: $.map(data, item => ({
                                text: item.name_suspect,
                                id: item.name_suspect
                            }
                        )),
                        pagination: {
                            more: (params.page * 30) < data.total_count
                        }
                    }
                },
                cache: true
            },
        }).change(() => {
            $('#search-form').submit()
        })
        // jQuery(document).ready(function() {
        //     init();
        // })
        //
        //
        // function init() {
        //     $('#select').select2({
        //         width: "100%",
        //         allowClear: false
        //     }).on('select2:open', function(e) {
        //         $('.select2-dropdown').hide();
        //         setTimeout(function() {
        //             jQuery('.select2-dropdown').slideDown(1000);
        //         });
        //     }).on('select2:closing', function(e) {
        //         e.preventDefault();
        //         setTimeout(function() {
        //             jQuery('.select2-dropdown').slideUp(1000, function() {
        //                 close();
        //             });
        //         }, 0);
        //     });
        // }
        //
        // function close() {
        //     $("#select").select2('destroy');
        //     init();
        // }
    </script>
    </div>
    </div>
</x-app-layout>
