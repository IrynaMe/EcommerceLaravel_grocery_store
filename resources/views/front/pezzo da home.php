<div class="col-md-3 top_brand_left" style="min-height:600px; width:280px">
                            <div class="hover14 column">
                                <div class="agile_top_brand_left_grid">
                                    <div class="tag"><img src="tema/images/tag.png" alt=" "
                                            class="img-responsive" />
                                    </div>
                                    <div class="agile_top_brand_left_grid1">
                                        <figure>
                                            <div class="snipcart-item block">
                                                <div class="snipcart-thumb">
                                                    <a href="single.html">
                                                        <h4 style="margin-top:15px; margin-bottom: 15px;">
                                                            {{ $Newproduct->name }}
                                                        </h4>
                                                        <div style="height:120px; ">
                                                            <img title=" " alt=" "
                                                                src="tema/{{ $Newproduct->image }}"
                                                                style="height:120px; " />
                                                        </div>

                                                        {{-- </a><p>{{ $product->name }}</p> --}}
                                                        <h4>{{ $Newproduct->discount }}
                                                            <span>{{ $Newproduct->price }}</span>
                                                        </h4>
                                                </div>
                                                <div class="snipcart-details top_brand_home_details">
                                                    <form action="checkout.html" method="post">
                                                        <fieldset>
                                                            <input type="hidden" name="cmd" value="_cart" />
                                                            <input type="hidden" name="add" value="1" />
                                                            <input type="hidden" name="business" value=" " />
                                                            <input type="hidden" name="item_name"
                                                                value="Fortune Sunflower Oil" />
                                                            <input type="hidden" name="amount" value="7.99" />
                                                            <input type="hidden" name="discount_amount"
                                                                value="1.00" />
                                                            <input type="hidden" name="currency_code" value="USD" />
                                                            <input type="hidden" name="return" value=" " />
                                                            <input type="hidden" name="cancel_return" value=" " />
                                                            <input type="submit" name="submit" value="Add to cart"
                                                                class="button" />
                                                        </fieldset>

                                                    </form>

                                                </div>
                                            </div>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>