
@extends('backend/layouts/layout')


@section('content')
<div class="px-5">
    <div class="text-end">
        <a href="{{ route('report.balance') }}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> View Data</a>

        <a href="#" class="btn btn-sm btn-dark" id="printBtn" onclick="printInvoice()">
            <i class="fa-solid fa-file-invoice" style="color: #fff;"></i> Print Invoice
        </a>  
    </div>

    <div class="pt-3" id="invice">
        <div class="d-flex justify-content-between">
            <div class="text">
                <div class="">Helpsx IT</div>
                <div class="">+8801723629080</div>
                <div class="">infoalihasanbd@gmail.com</div>
                <div class="">Behar hat, Shibgonj-Bogura</div>
            </div>
            <div class="text-end">
                <div class=""></div>
                <div class=""></div>
                <div class=""></div>
            </div>
        </div>
        <hr>
        <!-- Display other product information as needed -->
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Sales</th>
                    <th scope="col">Collection</th>
                    <th scope="col">Balance</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $grandTotalSales = 0;
                    $grandTtotalCollection = 0;
                ?>

               
                @foreach ($customers as $customer)
                <?php
                    $grandTotalSales += $customer->totalSales;
                    $grandTtotalCollection += $customer->totalCollection;
                ?>      
                <tr>
                    <th scope="row">{{$loop->index+1}}</th>
                    <td>{{$customer->customar_name}}</td>
                    <td>{{$customer->totalSales}}</td>
                    <td>{{$customer->totalCollection}}</td>
                    <td>{{$customer->totalSales - $customer->totalCollection}}</td>
                </tr>
                @endforeach
                <tr >
                    <th class="text-end" colspan="2">Total:</th>
                    <th class="text-start">{{$grandTotalSales}}</th>
                    <th class="text-start">{{$grandTtotalCollection}}</th>
                    <th class="text-end">{{$grandTotalSales-$grandTtotalCollection}}</th>
                </tr>
                
            </tbody>
        </table>
    </div>
</div>

<script>
    function printInvoice() {
    var printContent = document.getElementById('invice').innerHTML;
    var originalContent = document.body.innerHTML;

    document.body.innerHTML = printContent;

    window.print();

    // Restore original content after printing is done
    document.body.innerHTML = originalContent;
}
</script>

@endsection