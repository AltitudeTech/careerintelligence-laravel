<div aria-multiselectable="true" role="tablist" id="accordion" class="panel-group">
    <div class="panel panel-default"> <a title="Tab 1" aria-controls="collapse1" aria-expanded="false" href="#collapse1" data-parent="#accordion" data-toggle="collapse" id="heading1" role="tab" class="panel-heading collapsed"><span class="glyphicon icon-indicator"></span> <span class="panel-title">Sectors</span> </a>
        <div aria-labelledby="heading1" role="tabpanel" class="panel-collapse collapse" id="collapse1" aria-expanded="false">
            <ul class="list-group">
                <a href="{{ route('sector.index') }}" class="list-group-item">View All Sectors</a>
                <a href="#" id="createNewSector" data-toggle="modal" data-target="#myModal1" class="list-group-item">Create New Sector</a>
            </ul>
        </div>
    </div>
    <div class="panel panel-default"> <a title="Tab 2" aria-controls="collapse2" aria-expanded="false" href="#collapse2" data-parent="#accordion" data-toggle="collapse" id="heading2" role="tab" class="panel-heading collapsed"><span class="glyphicon icon-indicator"></span> <span class="panel-title">Categories</span> </a>
        <div aria-labelledby="heading2" role="tabpanel" class="panel-collapse collapse" id="collapse2" aria-expanded="false">
            <ul class="list-group">
                <a href="{{ route('category.index') }}" class="list-group-item">View All Categories</a>
                <a href="#" id="createNewCategory" data-toggle="modal" data-target="#myModal1" class="list-group-item">Create New Category</a>
            </ul>
        </div>
    </div>
    <div class="panel panel-default"> <a title="Tab 3" aria-controls="collapse3" aria-expanded="false" href="#collapse3" data-parent="#accordion" data-toggle="collapse" id="heading3" role="tab" class="panel-heading collapsed"><span class="glyphicon icon-indicator"></span> <span class="panel-title">Option</span> </a>
        <div aria-labelledby="heading3" role="tabpanel" class="panel-collapse collapse" id="collapse3" aria-expanded="false">
            <ul class="list-group">
                <a href="#" class="list-group-item">View All Option</a>
                <a href="#" class="list-group-item">Create New Option</a>
            </ul>
        </div>
    </div>
    <div class="panel panel-default"> <a title="Tab 4" aria-controls="collapse4" aria-expanded="false" href="#collapse4" data-parent="#accordion" data-toggle="collapse" id="heading4" role="tab" class="panel-heading collapsed"><span class="glyphicon icon-indicator"></span> <span class="panel-title">Option</span> </a>
        <div aria-labelledby="heading4" role="tabpanel" class="panel-collapse collapse" id="collapse4" aria-expanded="false">
            <ul class="list-group">
                <a href="#" class="list-group-item">View All Option</a>
                <a href="#" class="list-group-item">Create New Option</a>
            </ul>
        </div>
    </div>
</div>