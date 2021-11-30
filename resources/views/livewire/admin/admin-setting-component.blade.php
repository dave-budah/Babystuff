<div>
    <div class="container" style="padding: 30px 0">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Settings
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <form class="form-horizontal" wire:submit.prevent="saveSettings">
                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Email</label>
                                <div class="col-md-4">
                                    <input type="email" id="email" placeholder="Email" class="form-control input-md" wire:model="email">
                                    @error('email') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="phone" class="col-md-4 control-label">Phone</label>
                                <div class="col-md-4">
                                    <input type="text" id="phone" placeholder="Phone" class="form-control input-md" wire:model="phone">
                                    @error('phone') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="phone2" class="col-md-4 control-label">Phone 2</label>
                                <div class="col-md-4">
                                    <input type="text" id="phone2" placeholder="Phone 2" class="form-control input-md" wire:model="phone2">
                                    @error('phone2') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="address" class="col-md-4 control-label">Address</label>
                                <div class="col-md-4">
                                    <input type="text" id="address" placeholder="Address" class="form-control input-md" wire:model="address">
                                    @error('address') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="facebook" class="col-md-4 control-label">Facebook</label>
                                <div class="col-md-4">
                                    <input type="text" id="facebook" placeholder="facebook" class="form-control input-md" wire:model="facebook">
                                    @error('facebook') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="instagram" class="col-md-4 control-label">Instagram</label>
                                <div class="col-md-4">
                                    <input type="text" id="instagram" placeholder="Instagram" class="form-control input-md" wire:model="instagram">
                                    @error('instagram') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="twitter" class="col-md-4 control-label">Twitter</label>
                                <div class="col-md-4">
                                    <input type="text" id="twitter" placeholder="Twitter" class="form-control input-md" wire:model="twitter">
                                    @error('twitter') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="linkedin" class="col-md-4 control-label">Linkedin</label>
                                <div class="col-md-4">
                                    <input type="text" id="linkedin" placeholder="Linkedin" class="form-control input-md" wire:model="linkedin">
                                    @error('linkedin') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="map" class="col-md-4 control-label">Map</label>
                                <div class="col-md-4">
                                    <input type="text" id="map" placeholder="Map" class="form-control input-md" wire:model="map">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                   <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
