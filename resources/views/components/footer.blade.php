<footer>
    <h2>EXPLORE</h2>
    <ul>
        <li><a href="/">HOME</a></li>
        <li><a href="/store">STORE</a></li>
        <li><a href="/about">ABOUT</a></li>
        <li><a href="/contact">CONTACT</a></li>
    </ul>
</footer>

<script src="{{ url('js/main.js') }}"></script>

<script type="module">
    import countries from "{{ asset('js/countries.js') }}";
    import countryCities from "{{ asset('js/cities.js') }}"

    const selectCountry = document.getElementById('country');
    const selectCity = document.getElementById('city');

    @if(isset($user))
        const userCountry = "{{ $user->country }}";
        const userCity = "{{ $user->city }}";
    @else 
        const userCountry = null;
        const userCity = null;
    @endif

    if (selectCountry) {

        // Create and append options to the select element
        countries.forEach(country => {
            const option = document.createElement('option');
            option.value = country.name; // Set the value to country code
            option.text = country.name; // Set the display text to country name

            if (country.name === userCountry) {
                option.selected = true;
            }

            selectCountry.appendChild(option);
        });

        const event = new Event('change');
        selectCountry.dispatchEvent(event);
    }

    if (selectCity) {
        function populateCities(selectedCountry) {
            const citySelect = document.getElementById('city');
            citySelect.innerHTML = ''; // Clear existing options

            const selectedCountryCities = countryCities[0][selectedCountry];

            if (selectedCountryCities && selectedCountryCities.length > 0) {

                selectedCountryCities.forEach(city => {
                    const option = document.createElement('option');
                    option.value = city;
                    option.textContent = city;
                    citySelect.appendChild(option);

                    if (city === userCity) {
                        option.selected = true;
                    }
                });

            } else {

                const option = document.createElement('option');
                option.textContent = 'No cities available';
                citySelect.appendChild(option);

            }
        }

        selectCountry.addEventListener('change', function() {
            const selectedCountry = this.value;
            populateCities(selectedCountry);
        });

        const index = [...selectCountry.options].findIndex(option => option.value === userCountry);
        if (index !== -1) {
            selectCountry.selectedIndex = index;
            selectCountry.dispatchEvent(new Event('change'));
        }
    }

</script>

