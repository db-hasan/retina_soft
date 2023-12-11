
@extends('backend/layouts/layout')

@section('content')

<div class="px-5">
    <div class="text-end">
        <a href="{{ route('report.supplier') }}" class="btn btn-sm btn-dark"><i class="fas fa-plus-circle"></i> View Data</a>

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
                    <th scope="col">Supplier</th>
                    <th scope="col">Income</th>
                    <th scope="col">Expanse</th>
                    <th scope="col">Profit</th>
                    <th scope="col">Balance Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $totalIncome  = 0;
                    $totalExpence = 0;
                ?> 
                @foreach ($suppliers as $item)
                <?php
                    $income        = $item->income;
                    $totalIncome  += $income;
                    $expence       = $item->expence;
                    $totalExpence += $expence;
                    $balance       = $income - $expence;
                ?> 
                <tr>
                    <th scope="row">{{$loop->index+1}}</th>
                    <td>{{$item->supplier_name}}</td>
                    <td>{{$income}}</td>
                    <td>{{$expence }}</td>
                    <td>{{$balance}}</td>
                     @if($balance<0)
                        <td class="text-danger"> Negative Balence</td>
                    @else
                        <td class="text-primary"> Positive Balence</td>
                    @endif
                </tr>
                @endforeach
                <tr>
                    <th class="text-end bg-info border-end" colspan="2">Total:</th>
                    <th class="text-start bg-info border-end">{{$totalIncome}}</th>
                    <th class="text-start bg-info border-end">{{$totalExpence}}</th>
                    <th class="text-start bg-info">{{$totalIncome-$totalExpence}}</th>
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

<script src="{{asset('backend/js/jquery-3.7.1.min.js') }} "></script>
<script src="{{asset('backend/js/dataTables.js') }} "></script>

@endsection