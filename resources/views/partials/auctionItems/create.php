<h1>
    New Item
    <a class="btn btn-small btn-success" href="/auctionItems">List of Auction Items</a>
</h1>
<div role="alert">
      <span class="error" ng-show="myForm.$error.required">
       Required!</span>
</div>
<div ng-controller="AuctionItemController">
    <form name="createForm" class="form-horizontal" ng-submit="create()" novalidate>
        <fieldset>
            <div class="form-group">
                <div class="col-md-10">
                    <h5>
                        Enter Item ID:

                    </h5>
                     <input class="form-control input-md" id="itemId" name="itemId" placeholder="EX. A01, J22"
                           ng-model="itemId" ng-required="true">
                         <span style="color:red" ng-show="createForm.itemId.$dirty && createForm.itemId.$invalid && createForm.itemId.$error.required">
                              * ID Required
                          </span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-10">
                    <h5>
                        Name of Item:
                    </h5>
                    <input class="form-control input-md" id="nameOfActionItem" name="nameOfActionItem" type="text" placeholder="Really Nice Item"
                           ng-model="nameOfActionItem" required>
                        <span style="color:red" ng-show="createForm.nameOfActionItem.$dirty && createForm.nameOfActionItem.$invalid && createForm.nameOfActionItem.$error.required">
                              * Name Required
                        </span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-10">
                    <h5>
                        Enter Description:
                    </h5>
                    <textarea class="form-control input-md" rows="5" id="auctionDescription" name="auctionDescription" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vel felis eu purus molestie sagittis."
                            ng-model="auctionDescription" required></textarea>
                        <span style="color:red" ng-show="createForm.auctionDescription.$dirty && createForm.auctionDescription.$invalid && createForm.auctionDescription.$error.required">
                              * Name Required
                        </span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-10">
                    <h5>
                        Enter Value:
                    </h5>
                    <input class="form-control input-md" id="auctionValue" name="auctionValue" type="text" placeholder="100"
                           ng-model="auctionValue" required>
                        <span style="color:red" ng-show="createForm.auctionValue.$dirty && createForm.auctionValue.$invalid && createForm.auctionValue.$error.required">
                              * Value Required:
                        </span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-10">
                    <h5>
                        Enter Donor:
                    </h5>
                    <input class="form-control input-md" id="auctionDonor" name="auctionDonor" type="text" placeholder="John Doe"
                           ng-model="auctionDonor" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-10">
                    <h5>
                        Enter Notes:
                    </h5>
                    <textarea class="form-control input-md" rows="5" id="auctionNotes" name="auctionNotes" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a magna aliquam, faucibus risus sit amet, luctus ipsum. Sed ac pharetra lorem, id sagittis turpis. Nam ut porta nulla, at pretium est. Sed et elit at arcu cursus cursus vel at erat. Suspendisse ut dolor placerat enim cursus tempor sed sed est. Suspendisse ac urna id tellus fringilla fringilla imperdiet eu odio. Maecenas consequat magna nec dui ornare tristique. Suspendisse laoreet nibh enim, et finibus sem dictum sed."
                              ng-model="auctionNotes" required></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-10">
                    <input ng-disabled="createForm.$invalid " type="submit" id="submit" name="submit" class="btn btn-primary"/>
                </div>
            </div>
        </fieldset>
    </form>
</div>


