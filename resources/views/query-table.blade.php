<form action="{{ route('queries.store') }}" method="post">
    @csrf
    <table class="table table-bordered w-100" style="width: 100%; direction: ltr; text-align: right">
        <thead>
        <tr>
            <th class="">انتخاب</th>
            <th class="w-100">کلمه کلیدی</th>
            <th class="w-100">نمایش‌ها</th>
            <th class="w-100">CTR</th>
            <th class="w-100">کلیک‌ها</th>
            <th class="w-100">موقعیت</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($items as $index => $item)
            <tr>
                <td>
                    <input type="checkbox" name="queries[{{ $index }}][selected]" value="1">
                    <input type="hidden" name="queries[{{ $index }}][key]" value="{{ $item['key'] }}">
                    <input type="hidden" name="queries[{{ $index }}][impressions]" value="{{ $item['impressions'] }}">
                    <input type="hidden" name="queries[{{ $index }}][ctr]" value="{{ $item['ctr'] }}">
                    <input type="hidden" name="queries[{{ $index }}][clicks]" value="{{ $item['clicks'] }}">
                    <input type="hidden" name="queries[{{ $index }}][position]" value="{{ $item['position'] }}">
                </td>
                <td>{{ $item['key'] }}</td>
                <td>{{ $item['impressions'] }}</td>
                <td>{{ $item['ctr'] }}</td>
                <td>{{ $item['clicks'] }}</td>
                <td>{{ $item['position'] }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <button type="submit">ذخیره موارد انتخاب ‌شده</button>
</form>
