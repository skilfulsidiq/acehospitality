<div>
    <livewire:frontend.components.image-breadcrumb/>

    <div class="p20">

    </div>


    <x-page-sections.location-properties title="Abuja" desc="lolf">

        <x-slot name="properties">
            <livewire:frontend.components.locations.properties
            :num="4" />
        </x-slot>

    </x-page-sections.location-properties>
    <x-page-sections.location-properties title="Lagos" desc="lolf">

        <x-slot name="properties">
            <livewire:frontend.components.locations.properties :num="3"/>
        </x-slot>

    </x-page-sections.location-properties>
    <x-page-sections.location-properties title="Kano" desc="lolf">

        <x-slot name="properties">
            <livewire:frontend.components.locations.properties :num="2"/>
        </x-slot>

    </x-page-sections.location-properties>



</div>
