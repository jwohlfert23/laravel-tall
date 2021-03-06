<?php $padding = $padding ?? 'px-5 py-3'; ?>

<div>
    @if(isset($label))
        <div class="text-xs font-semibold text-gray-500 -ml-1 mb-1 tracking-wide uppercase">{{$label}}</div>
    @endif
    <div {{$attributes->except('padding', 'label')->merge(['class' => "rounded bg-white shadow-sm border overflow-hidden $padding"])}}>
        {{$slot}}
    </div>
</div>
