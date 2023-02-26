<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    <div class="search-bg">
        <form action="{{ route('header.search') }}">
            <input type="text" class="form-control" wire:model="search" type="search" placeholder="Search Here">
            <button type="Submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
</div>