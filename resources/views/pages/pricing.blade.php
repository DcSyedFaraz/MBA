@extends('layouts.web')

@section('title', 'Pricing')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path())

@section('content')

<section class="container py-6 px-4 mx-auto" x-data="datatables()" x-cloak>
    <h1 class="text-3xl font-semibold py-8 text-primary-one text-center">Pricing</h1>

    <div class="bg-white border border-black shadow-lg overflow-x-auto"
        style="">
        <table class="border-collapse table-auto w-full whitespace-no-wrap table-striped ">
            <thead>
                <tr class="text-center">

                        <th class="bg-primary-one sticky top-0 px-6 py-4 text-white font-bold tracking-wider  text-sm">
                            Days
                        </th>
                        <th class="bg-primary-one sticky top-0 px-6 py-4 text-white font-bold tracking-wider  text-sm">
                            High School
                        </th>
                        <th class="bg-primary-one sticky top-0 px-6 py-4 text-white font-bold tracking-wider  text-sm">
                            UnderGraduate
                        </th>
                        <th class="bg-primary-one sticky top-0 px-6 py-4 text-white font-bold tracking-wider  text-sm">
                            Masters
                        </th>
                </tr>
            </thead>
            <tbody>
                    <tr class=" hover:text-white text-base">

                        <td class="  text-black border-black days">
                            @foreach ($deadlines as $deadline)
                                <span class="table-td">

                                    {{ $deadline->name }}
                                </span>
                            @endforeach
                        </td>


                        <td class="  text-black border-black days">
                            @foreach ($college as $college)
                                <span class="table-td">

                                    {{addCurrency(  $college->per_page_price )}}
                                </span>
                            @endforeach
                        </td>


                        <td class="  text-black border-black days">
                            @foreach ($under as $under)
                                <span class="table-td">

                                    {{addCurrency(  $under->per_page_price )}}
                                </span>
                            @endforeach
                        </td>


                        <td class="  text-black border-black days">
                            @foreach ($master as $college)
                                <span class="table-td">

                                    {{addCurrency(  $college->per_page_price )}}
                                </span>
                            @endforeach
                        </td>



                    </tr>
            </tbody>
        </table>


    </div>
    <div class="mt-6 flex flex-col justify-center gap-4 sm:flex-row md:mt-8 lg:mt-10">
        <a href="javascript:void(Tawk_API.toggle())" class="btn bg-primary-two ">
            Live Chat
        </a>
        <a href="{{ route('order') }}" class="btn bg-primary-one ">
            Order Now
        </a>
      </div>
</section>

<script>
    // function datatables() {
    //     return {
    //         headings: [

    //             {
    //                 'key': 'urgency',
    //                 'value': 'URGENCY'
    //             },
    //             {
    //                 'key': 'highschool',
    //                 'value': 'High School (STANDARD)'
    //             },
    //             {
    //                 'key': 'undergraduate',
    //                 'value': 'Undergraduate (PREMIUM)'
    //             },
    //             {
    //                 'key': 'master',
    //                 'value': 'Master (PLATINUM)'
    //             }

    //         ],
    //         users: [{
    //             "userId": 1,
    //             "urgency": "15 Days+",
    //             "highschool": "AED 4",
    //             "undergraduate": "AED 6",
    //             "master": "AED 8"

    //         }, {
    //             "userId": 2,
    //             "urgency": "10 Days",
    //             "highschool": "AED 7",
    //             "undergraduate": "AED 8",
    //             "master": "AED 9"
    //         }, {
    //             "userId": 3,
    //             "urgency": "8 Days",
    //             "highschool": "AED 9",
    //             "undergraduate": "AED 10",
    //             "master": "AED 11"
    //         }, {
    //             "userId": 4,
    //             "urgency": "6 Days",
    //             "highschool": "AED 11",
    //             "undergraduate": "AED 12",
    //             "master": "AED 13"
    //         }, {
    //             "userId": 5,
    //             "urgency": "5 Days",
    //             "highschool": "AED 13",
    //             "undergraduate": "AED 14",
    //             "master": "AED 15"
    //         }, {
    //             "userId": 6,
    //             "urgency": "4 Days",
    //             "highschool": "AED 15",
    //             "undergraduate": "AED 16",
    //             "master": "AED 17"
    //         }, {
    //             "userId": 7,
    //             "urgency": "3 Days",
    //             "highschool": "AED 17",
    //             "undergraduate": "AED 18",
    //             "master": "AED 19"
    //         }, {
    //             "userId": 8,
    //             "urgency": "48Hours",
    //             "highschool": "AED 19",
    //             "undergraduate": "AED 20",
    //             "master": "AED 21"
    //         }, {
    //             "userId": 9,
    //             "urgency": "24Hours",
    //             "highschool": "AED 21",
    //             "undergraduate": "AED 22",
    //             "master": "AED 23"
    //         }, {
    //             "userId": 10,
    //             "urgency": "12 Hours",
    //             "highschool": "AED 23",
    //             "undergraduate": "AED 24",
    //             "master": "AED 25"
    //         }, {
    //             "userId": 11,
    //             "urgency": "6 Hours",
    //             "highschool": "AED 25",
    //             "undergraduate": "AED 26",
    //             "master": "AED 27"
    //         }],
    //         selectedRows: [],

    //         open: false,

    //         toggleColumn(key) {
    //             // Note: All td must have the same class name as the headings key!
    //             let columns = document.querySelectorAll('.' + key);

    //             if (this.$refs[key].classList.contains('hidden') && this.$refs[key].classList.contains(key)) {
    //                 columns.forEach(column => {
    //                     column.classList.remove('hidden');
    //                 });
    //             } else {
    //                 columns.forEach(column => {
    //                     column.classList.add('hidden');
    //                 });
    //             }
    //         },

    //         getRowDetail($event, id) {
    //             let rows = this.selectedRows;

    //             if (rows.includes(id)) {
    //                 let index = rows.indexOf(id);
    //                 rows.splice(index, 1);
    //             } else {
    //                 rows.push(id);
    //             }
    //         },

    //         selectAllCheckbox($event) {
    //             let columns = document.querySelectorAll('.rowCheckbox');

    //             this.selectedRows = [];

    //             if ($event.target.checked == true) {
    //                 columns.forEach(column => {
    //                     column.checked = true
    //                     this.selectedRows.push(parseInt(column.name))
    //                 });
    //             } else {
    //                 columns.forEach(column => {
    //                     column.checked = false
    //                 });
    //                 this.selectedRows = [];
    //             }
    //         }
    //     }
    // }
</script>

@endsection
