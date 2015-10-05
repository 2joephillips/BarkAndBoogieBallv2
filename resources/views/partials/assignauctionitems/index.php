<div ng-controller="AssignAuctionItemsController" ng-init="find()">

    <div class="row">
        <h1>Auction Items
        </h1>
        <div class="form-group">
            <div class="col-md-3">
                <h5>Search by Item Id:</h5><input type="text" class="form-control input-md" ng-model="search.itemId">
            </div>
            <div class="col-md-3">
                <h5>Search by Item Name:</h5> <input class="form-control input-md" ng-model="search.nameOfActionItem">
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
                    <th>Winning Bid</th>
                    <th>Winning Id</th>
                    <th>Action</th>

                </tr>
                </thead>
                <tbody>
                <tr dir-paginate="item in items | filter:search:strict | itemsPerPage: 25">
                    <td class="col-md-1">{{ item.itemId }}</td>
                    <td class="col-md-5">{{ item.nameOfActionItem | limitTo: 25}}{{item.nameOfActionItem.length > 25 ? '...' : ''}}</td>
                    <td class="col-md-2">
                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input class="form-control input-md" id="winningBid" fcsa-number name="winningBid" type="text"  placeholder="100"
                                   ng-model="item.winningBid" value="var|currency" ng-required="true" min="1">
                            </div>
                    </td>
                    <td class="col-md-2">
                        <angucomplete-alt id="ex1"
                                          placeholder="Enter AuctionId"
                                          pause="100"
                                          selected-object="selectedAuctionId"
                                          local-data="attendees"
                                          search-fields="seat.auctionId"
                                          title-field="seat.auctionId"
                                          minlength="1"
                                          input-class="form-control form-control-small"
                                          match-class="highlight"
                                          focus-in="focusIn(item)"
                                          field-required="true"
                                          initial-value="item.attendee.seat.auctionId"/>
                    </td>
                    <td>
                        <a class="btn btn-small btn-success" ng-click="update(item)"><i class="fa fa-refresh"></i>Update</a>
                    </td>



                </tr>
                </tbody>
            </table>
        </div>
        <dir-pagination-controls></dir-pagination-controls>
    </div>

</div>