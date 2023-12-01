<h2>Schedule of Payment</h2>
<small>
    orem ipsum, dolor sit amet consectetur adipisicing elit. Minus nulla odit,
     quae laborum quo velit tenetur eligendi molestias totam rerum est officia vero,
      labore, iure tempore? Ratione tempora eaque aut!
</small>    
<!-- 
net total contract price = 


    spotcash = 


 -->
<div class="">
    <table border="1" width="100%" >
        <thead>
            <tr>
                <th>Id</th>
                <th>Blk & Lt / Phase / RA</th>
                <th>Date</th>
                <th>Condo prize </th>
                <th>Payment Term</th>
                <th>Monthly Payment </th>
            </tr>
        </thead>
        <tbody>
        <!-- now()->addDays(30)->format('Y-m-d') -->

            <tr>
                <td> {{ $PassingData->id }}</td>
                <td> {{ $PassingData->propertyName }}</td>
                <td> {{ $PassingData->created_at->format('Y-m-d')  }}</td>
                <td> {{ number_format($PassingData->totalPrize) }}</td>
                <td> {{ $PassingData->paymentTerm}}</td>
                <td> computation </td>
            </tr>
        </tbody>
    </table>
</div>
