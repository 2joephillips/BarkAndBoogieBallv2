

<p>
    <% $name %>, thank you for coming to Bark and Boogie Ball 2015.
</p>
<p>
    Below is the receipt for the item(s) you won:
</p>

    @foreach ($items->all() as $item)
        <table border="1" align="left">
            <thead>
            <tr>
                <th>Item ID</td>
                <th>Name</td>
                <th>Winning Bid</td>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><% $item->itemId %></td>
                <td><% $item->nameOfActionItem %></td>
                <td>$<% $item->winningBid %></td>
            </tr>
            </tbody>
        </table>
    @endforeach


<p>

</p>

