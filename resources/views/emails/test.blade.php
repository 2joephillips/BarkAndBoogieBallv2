

<p>
    <% $name %>, thank you for coming to Bark and Boogie Ball 2015.
</p>
<p>
    Below is the receipt for the item(s) you won:
</p>


        <table border="1" align="left">
            <thead>
            <tr>
                <th>Item ID</td>
                <th>Name</td>
                <th>Winning Bid</td>
            </tr>
            </thead>
            <tbody>
            @foreach ($items->all() as $item)
            <tr>
                <td><% $item->itemId %></td>
                <td><% $item->nameOfActionItem %></td>
                <td>$<% $item->winningBid %></td>
            </tr>
            @endforeach
            </tbody>
        </table>

    <h1>PAID IN FULL</h1>

<p>

</p>

