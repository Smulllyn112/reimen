

                                <form method="post" action="{{$slot}}" onsubmit="return validateForm()" >                                       
                                    @csrf                                      
                                        <input type="hidden" name="_method" value="delete" />

                                        <button type="submit" value="Törlés" class="btn btn-danger btn-block" style="color:black;" >
                                          Elem törlése<i class="fa fa-trash"></i>
                                        </button>

                                </form>
