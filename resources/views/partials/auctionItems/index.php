<div ng-controller="AuctionItemController" ng-init="find()">


    <div class="row">
        <h1>Auction Items {{ items.length }}
            <a class="btn btn-small btn-success" href="/auctionItems/create">Add Auction Item</a>
        </h1>
        <div class="form-group">
            <div class="col-md-3">
                Search by Item Id:<input class="form-control input-md" ng-model="search.itemId">
             </div>
            <div class="col-md-3">
                Search by Item Name: <input class="form-control input-md" ng-model="search.nameOfActionItem">
            </div>
        </div>
    </div>
    <h1 ng-if="!items.length">
        There are no Auction Items right now.
    </h1>
    <div ng-if="items.length" class="row">
        <div class="table-responsive">
            <table class="table table-striped table-hover table-condensed">
                <thead>
                <tr>
                    <th>Item ID</td>
                    <th>Name</td>
                    <th>Description</td>
                    <th>Donor</td>
                    <th colspan="1">Actions</td>
                </tr>
                </thead>
                <tbody>
                <tr dir-paginate="item in items | filter:search:strict | itemsPerPage: 25">
                    <td>{{ item.itemId }}</td>
                    <td>{{ item.nameOfActionItem | limitTo: 25}}{{item.nameOfActionItem.length > 25 ? '...' : ''}}</td>
                    <td>{{ item.auctionDescription | limitTo: 50 }}{{item.auctionDescription.length > 50 ? '...' : ''}}</td>
                    <td>{{ item.auctionDonor }}</td>
                    <td>
                        <a ng-href="/auctionitems/edit/{{item.id}}" class="btn btn-small btn-info"><i class="fa fa-edit"></i>Edit</a>
                        <a class="btn btn-small btn-danger" ng-click="remove(item)"><i class="fa fa-trash"></i>Delete</a>
                    </td>

                </tr>
                </tbody>
            </table>
        </div>

        <dir-pagination-controls></dir-pagination-controls>
    </div>

</div>