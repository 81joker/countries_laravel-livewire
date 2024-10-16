<?php $countryName = strtolower($country['name']['common']); ?>
<div class="col country-info" id="toptip" data-bs-toggle="tooltip" data-bs-delay="100" data-bs-placement="top"
    title="Klicken Sie für Mehr info über {{ Str::upper($countryName) }}">
    <div class="country-info-item">
        {{-- <div class="item"> --}}
        {{-- <div class="item child-item"> --}}
        <a href="{{ route('country.show', $countryName) }}" class="country-info-item__link">
            {{-- <a href="{{ route('country.show', $countryName) }}" class="item-image"> --}}
            <div class="hover-overlay"></div>

            <div class="country-info-item__link__content">
                {{ $countryName }}
            </div>

            <div class="country-info-item__link__image">
                {{-- <div class="taxonomy-term__image"> --}}
                <img src="{{ $country['flags']['png'] }}" class="card-img-top image-01"
                    alt="{{ $country['name']['common'] }}">
                <?php  
                  if (isset($country['coatOfArms']['png'])) {
                      echo '<img src="' . $country['coatOfArms']['svg'] . '" alt="Coat of Arms" class="card-img-top image-02">';
                  } else {  ?>
                <img src="{{ $country['flags']['png'] }}" class="card-img-top image-02"
                    alt="{{ $country['name']['common'] }}">
                <?php } ?>
            </div>

        </a>
    </div>
</div>
