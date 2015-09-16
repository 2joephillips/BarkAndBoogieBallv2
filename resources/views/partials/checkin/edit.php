
<div ng-controller="CheckinController" ng-init="findOne()">
    <br>
    <br>
    <br>
    <div class="row">
        <h1>Receipt</h1>
        <h3>HSFC Bark & Boogie Ball 2015</h3>
        <h4>Receipt For: {{ attendee.firstname }} {{ attendee.lastname }}</h4>

        <br>

        <div class="table-responsive">
            <table class="table table-striped table-hover table-condensed">
                <thead>
                <thead>
                <tr>
                    <th>Item ID</td>
                    <th>Name</td>
                    <th>Winning Bid</td>
                </tr>
                </thead>
                <tbody>
                <tr dir-paginate="item in attendee.item | filter:search:strict | itemsPerPage: 25">
                    <td>{{ item.itemId }}</td>
                    <td>{{ item.nameOfActionItem }}</td>
                    <td>${{ item.winningBid }}</td>
                </tr >
                </tbody>
            </table>

        </div>

    </div>
    {{ attendee | json }}
</div>

