
		@php
			if($total>1){
				$plural = 'a';
			}else{
				$plural = 'az';
			}

		@endphp



            <div class="clearfix">
                <div class="hint-text">Megjelenített <b>{{ count($elements) }}</b> db {{$plural}} <b>{{ $total }}</b> közül </div>
                <ul class="pagination">
                    {{ $elements->links() }}
                </ul>
            </div>