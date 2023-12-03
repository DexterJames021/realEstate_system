<h2>Schedule of Payment</h2>
<!-- <small>
    orem ipsum, dolor sit amet consectetur adipisicing elit. Minus nulla odit,
     quae laborum quo velit tenetur eligendi molestias totam rerum est officia vero,
      labore, iure tempore? Ratione tempora eaque aut!
</small>     -->



<div>
    <!-- <p>Payment-term:</p> -->
    <p>Downpayment Total: {{ $downpaymentTotal = $PassingData->totalPrize  * 0.20}}</p>
    <p>Monthly-total: {{abs($monthlyTotal = $downpaymentTotal - $PassingData->totalPrize)}}</p>
    <p>monthly payment: {{number_format(abs($monthlyTotal / 18))}}</p>
    <table border="1" width="100%" >
        <thead>
            <tr>
                <th>Id</th>
                <th>Blk & Lt / Phase / RA</th>
                <th>Date</th>
                <th>Condo prize </th>
                <th>Payment Term</th>
                <!-- <th>Monthly Payment </th> -->
            </tr>
        </thead>
        <tbody>
            <tr>

                <!-- <td> computation </td> -->
            </tr>
        </tbody>
    </table>
</div>



