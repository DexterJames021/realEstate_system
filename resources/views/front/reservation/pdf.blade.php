<h2 class="">Reservation</h2>
<div class="">

    <table border="1" width="100%" >
        <thead class="">
            <tr>
                <th>id</th>
                <th>Date</th>
                <th>Condo prize </th>
                <th>Monthly Income</th>
                <th>Annual Payment</th>
                <th>Payment Term</th>
                <th>Monthly Payment </th>
            </tr>
        </thead>
        <tbody>
        @foreach ($PassingData as $calling)
            <tr>
                <td> {{ $calling->id }}</td>
                <td> {{ now()->format('d/m/Y')  }}</td>
                <td> {{ number_format($totalPrize) }}</td>
                <td> {{ number_format( $calling->monthlyIncome )}}</td>
                <td> {{ $calling->annualPayment }}</td>
                <td> {{ $data = $calling->paymentTerm * 12 }} months</td>
                <td> {{ number_format($totalPrize / (30 / $calling->annualPayment)) }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
