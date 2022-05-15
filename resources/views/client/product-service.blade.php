@php
    $data=[
        'main' => null,
        'page' => "Products And Services",
        'previousPage' => 'Home',
        'previousRoute' => 'client.index',
        'breadcumb' => null,
        'route' => null
    ]
@endphp

@extends('layouts.app', $data)
@section('title', "Products And Services | " . env('APP_NAME'))
@section('meta_keys', "")
@section('meta_desc', "")

@section('content')

<div class="page-header text-center" style="background-image: url('{{ asset('images/page-header-bg.jpg') }}')">
    <div class="container">
        <h1 class="page-title">Products And Services</h1>
    </div>
</div>

<div class="page-content mt-2">
    <div class="container" style="width: 1188px;">
        <div class="row">
            <div class="row">
                <div class="col-lg-4">
                    <div class="service-card">
                        <h4 class="text-center">General Cargo</h4>

                        <p class="text-left">With Trico logistic, you can transport a wide range of goods like textile, petrochemicals, machinery parts, electronics and industrial parts. which classified suitable for sea freight by relevant authorities like IMO and others. Various goods are carried safely and also delivered fastly with Trico logistic high quality service. Click register and you can easily carry your frieght through Trico</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-card">
                        <h4 class="text-center">Charges</h4>

                        <p class="text-left">We offer you fair charges to forward your cargo.Start shipping with Trico Logistic Ship a package, learn about parcel services, get express shipping rates and find expert international shipping advice. you can pay your frieght forwarding charges by login to our portal. <br>Bellow table shows the shiping rate</br> </p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-card">
                        <h4 class="text-center">Countries</h4>

                        <p class="text-left">We have expand our service to Offering service to 7 countries and being the fastest-growing shipping cargo brand around the world, Trico Cargo has been carrying out the shipping cargo transportation operations since 2000. and We offer some of cheapest International shiping rates, alongside a fast and reliable frieght forwarding  service. Every day we collect thousands of cargo and send them all over the globe. <br> You can find our more about countries by clicking Network link in home page</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 px-0" style="width: 1188px;">
        <p class="mx-0 mb-2">You can do the payment through online and login to our platform to experience the new technology to give you best and fast service..    </p>
        <div class="row justify-content-center">
            <div class="col-lg-12 table-responsive">
                <table class="table table-hover table-striped table-bordered p-2">
                    <thead class="thead-dark">
                        {{-- <tr>
                            <th>Storage Fee</th>
                        </tr> --}}
                        <tr>
                            <th>General Charges</th>
                            <th>Fixed Price</th>
                            <th>Price (Kg * Day)</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Cargoes received on the first day (up to 24 hours)</td>
                            <td>70 USD</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Cargoes received on the 2nd-3rd day (Between 24-72 hours)</td>
                            <td>70 USD</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Cargoes received on the 4th-14th day</td>
                            <td>70 USD</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Cargoes received after 15 day</td>
                            <td>70 USD</td>
                            <td></td>
                        </tr>
                    </tbody>

                    <thead class="thead-dark">
                        <tr>
                            <th>Special Charges</th>
                            <th>Fixed Price</th>
                            <th>Price (Kg * Day)</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Cargoes received on the first day (up to 24 hours)</td>
                            <td>135 USD</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Cargoes received on the 2nd-3rd day (Between 24-72 hours)</td>
                            <td>135 USD</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Cargoes received on the 4th-14th day</td>
                            <td>135 USD</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Cargoes received after 15 day</td>
                            <td>135 USD</td>
                            <td></td>
                        </tr>
                    </tbody>

                    <thead class="thead-dark">
                        <tr>
                            <th>Additional Service</th>
                            <th>Fixed Price</th>
                            <th>Price per KG</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Inspection</td>
                            <td>36 USD</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Sample</td>
                            <td>36 USD</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Handling</td>
                            <td>66 USD</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Opening</td>
                            <td>36 USD</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Receipt of Document</td>
                            <td>16 USD</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Photographing (Per Photograph)</td>
                            <td>10 USD</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Porterage</td>
                            <td></td>
                            <td>0040 USD</td>
                        </tr>
                        <tr>
                            <td>Delivery to Different warehouse upon customer's demand</td>
                            <td>71 USD</td>
                            <td>0153 USD</td>
                        </tr>
                        <tr>
                            <td>Wooden pallet sales (Per Pallet)</td>
                            <td>15 USD</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Abandoned to warehouse (Up to 10 KG)</td>
                            <td>255 USD</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Abandoned to warehouse (10 KG and above)</td>
                            <td>510 USD</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Domestic lines transfer</td>
                            <td>133 USD</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>International lines transfer</td>
                            <td>133 USD</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Special services provided upon customer's demand</td>
                            <td>133 USD</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>X-ray inspection fee</td>
                            <td>15 USD</td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
</script>
@endsection
