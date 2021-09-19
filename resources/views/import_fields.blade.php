<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Select fields') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <x-validation-errors class="mb-4" :errors="$errors"/>

                    <form action="{{ route('import_process') }}" method="POST">
                        @csrf

                        <x-input type="hidden" name="csv_data_file_id" value="{{ $csv_data_file->id }}"/>

                        <table class="min-w-full divide-y divide-gray-200 border">
                            @if (isset($headings))
                                <thead>
                                <tr>
                                    @foreach ($headings[0][0] as $csv_header_field)
                                        {{--                                            @dd($headings)--}}
                                        <th class="px-6 py-3 bg-gray-50">
                                            <span class="text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">{{ $csv_header_field }}</span>
                                        </th>
                                    @endforeach
                                </tr>
                                </thead>
                            @endif

                            <tbody class="bg-white divide-y divide-gray-200 divide-solid">
                            @foreach($csv_data as $row)
                                <tr class="bg-white">
                                    @foreach ($row as $key => $value)
                                        <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                            {{ $value }}
                                        </td>
                                    @endforeach
                                </tr>
                            @endforeach

                            <tr>
                                @foreach ($csv_data[0] as $key => $value)
                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">
                                        <select name="fields[{{ $key }}]">
                                            @foreach (config('app.db_fields') as $db_field)
                                                <option value="{{ (\Request::has('header')) ? $db_field : $loop->index }}"
                                                        @if ($key === $db_field) selected @endif>{{ $db_field }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                @endforeach
                            </tr>
                            </tbody>
                        </table>

                        <x-button class="mt-4">
                            {{ __('Submit') }}
                        </x-button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
