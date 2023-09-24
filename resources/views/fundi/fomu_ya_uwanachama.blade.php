<div class="row">
                        <div class="col-lg-12">
                            <h2 class="text-center">FOMU YA MAOMBI NA MAKUBALIANO YA UANACHAMA</h2>
                        </div>
                    </div>

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Oops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ url('/save_form') }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <strong>Jina la Kwanza:</strong>
                                    <input type="text" name="jinakwanza" class="form-control  is-valid" placeholder="Jina la Kwanza:">
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <strong>Jina la Kati:</strong>
                                    <input type="text" name="jinakati" class="form-control  is-valid" placeholder="Jina la Kati:">
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <strong>Jina la Mwisho:</strong>
                                    <input type="text" name="jinamwisho" class="form-control  is-valid" placeholder="Jina la Mwisho:">
                                </div>
                            </div>

                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <strong>Jinsia:</strong>
                                        Male <input type="checkbox" id="male" name="gender" value="male">
                                        Female <input type="checkbox" id="female" name="gender" value="female">
                                    </label>
                                </div>
                            </div>

                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <strong>Tarehe ya kuzaliwa:</strong>
                                    <input type="date" id="dob" name="dob" class="form-control  is-valid">
                                </div>
                            </div>

                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                <strong>Uraia:</strong>
                                <select id="uraia" name="uraia" class="form-control  is-valid">
                                <option value="tz">Tanzanian</option>
                                <option value="ke">Kenyan</option>
                                <option value="ug">Ugandan</option>
                                </select>
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>Namba ya kitambulisho cha taifa:</strong>
                                    <input type="number" id="nin" name="nida" class="form-control  is-valid" pattern="[0-9]*" maxlength="12">
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                        <strong>Kiwango cha elimu:</strong>
                                        Msingi <input type="checkbox" id="msingi" name="elimu" value="msingi">
                                        Sekondari <input type="checkbox" id="seko" name="elimu" value="sekondari">
                                        Chuo cha ufundi <input type="checkbox" id="chuo" name="elimu" value="chuo cha ufundi">
                                </div>
                            </div>
                            
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Je, unazoefu wa muda gani/Elimu ya kitengo gani katika kazi ya ufundi:</strong>
                                    <textarea class="form-control is-valid" style="height:150px" name="uzoefu" placeholder="Uzoefu/Elimu"></textarea>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 row">
                                <strong>ANUANI/MAHALI UNAPOISHI:</strong>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <strong>Mkoa:</strong>
                                    <input type="text"  name="mkoa" class="form-control  is-valid" required>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <strong>Wilaya:</strong>
                                    <input type="text" id="wilaya" name="wilaya" class="form-control  is-valid" required>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <strong>Kata:</strong>
                                    <input type="text" id="kata" name="kata" class="form-control  is-valid" required>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <strong>Mtaa:</strong>
                                    <input type="text" id="mtaa" name="mtaa" class="form-control  is-valid" required>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <strong>Mji/Kijiji:</strong>
                                    <input type="text" id="mji" name="mji" class="form-control  is-valid" required>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 row">
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <strong>Namba yako ya simu 1:</strong>
                                    <input type="tel" id="phone1" name="phone1" class="form-control  is-valid" placeholder="0xxx xxx xxx" required>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <strong for="phone2">Namba yako ya simu 2:</strong>
                                    <input type="tel" id="phone2" name="phone2" class="form-control  is-valid" placeholder="0xxx xxx xxx">
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <strong for="email">Barua pepe:</strong>
                                    <input type="email" id="email" name="email" class="form-control  is-valid" placeholder="example@example.com" required> 
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Umeihafamu vipi taasisi:</strong>
                                    <input type="checkbox" id="mtu" name="uvtaasisi" value="kupitiakwamtu"> Kupitia mtu wa karibu
                                    <input type="checkbox" id="matangazo" name="uvtaasisi" value="kupitiamatangazo"> Kupitia matangazo au mtandao wa kijamii
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 row">
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <strong>Jina la Mdhamini:</strong>
                                        <input type="text" name="jinamdhamini" class="form-control is-valid" placeholder="Jina la mdhamini:">
                                    </div>
                                    </div>

                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                    <strong>Ni nani kwako:</strong>
                                    <input type="text" name="uhusianomdhamini" class="form-control is-valid" placeholder="Ni nani kwako:">
                                    </div>
                                </div>

                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <strong>Namba yake ya simu:</strong>
                                        <input type="text" name="nambamdhamini" class="form-control is-valid" placeholder="Namba yake ya simu:">
                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 row p-3">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>

                        </div>

                    </form>