<div class="col-lg-10">
    <div class="card m-b-30">
        <div class="card-header">
            <h5 class="card-title">اضافة شقة سكنية </h5>
        </div>
        <div class="card-body">
            <label for="number">رقم الشقة</label>
            <div class="form-group mb-0">
                <input value="{{ old('number', $apartment->number ?? '') }}" name="number" type="number"
                    class="form-control" name="inputText" id="inputText" placeholder=" رقم الشقة السكنية">
            </div>
        </div>
        <div class="card-body">
            <label for="owner">اسم المالك</label>
            <div class="form-group mb-0">
                <input value="{{ old('owner', $apartment->owner ?? '') }}" name="owner" type="text"
                    class="form-control" name="inputText" id="inputText" placeholder="اسم المالك">
            </div>
        </div>
        <div class="card-body">
            <label for="building_id">اختار البرج السكني</label>
            <select class="form-control" name="building_id" id="">
                <option value="">اخنر البرج السكني</option>
                @foreach ($buildings as $building)
                    <option value="{{ $building->id }}"
                        {{ old('building_id', $apartment->building_id) == $building->id ? 'selected' : '' }}>
                        {{ $building->name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
</div>
