@extends('layouts.app')

@section('masthead')
@endsection

@section('livewire')
@endsection

@section('content')
    <div class="container-mobile flex flex-col items-center">
        <x-services-block title="Emergency Callouts" id="callouts">
            <x-services-item number="01." title="Complete Lighting Loss">
                Generally I would troubleshoot the issue by checking the electrical panel,
                wiring, light fixtures and switches.
                I may replace damaged components or fix loose connections to restore power to the lights.
            </x-services-item>

            <x-services-item number="02." title="No Power to Sockets">
                In most circumstances I would troubleshoot by checking the circuit breaker,
                wiring, and outlet receptacle. I may replace damaged components or fix loose connections to restore power.
            </x-services-item>

            <x-services-item number="03." title="Kitchen Utilities Not Working">
                If kitchen utilities aren't working, I would check the circuit breakers, wiring, outlet receptacles,
                appliances, and switches. If the problem persists, I would check the main electrical supply.
                I would replace any damaged components or repair any loose connections to restore power.
            </x-services-item>

            <x-services-item number="04." title="Lighting Failure">
                If there is a light broken, I would check the electrical panel, wiring, light fixtures and switches.
                I would repair or replace any damaged components to fix the light.
            </x-services-item>

            <x-services-item number="05." title="No Hot Water From Electric Immersion Heater">
                If there's no hot water from an electric immersion heater, I would check the circuit breaker, wiring,
                and the immersion heater element.
                I would fix any issues or replace any damaged components to restore hot water.
            </x-services-item>

            <x-services-item number="06." title="Fuses Blowing Constantly">
                I would check wiring and electrical load, repair or replace any damaged components to resolve the
                issue of fuses blowing constantly.
            </x-services-item>

            <x-services-item number="07." title="MCB's Tripping">
                I would check circuit and appliances, repair or replace any faulty components or address overloading 
                issues to resolve the problem of MCB's tripping.
            </x-services-item>

            <x-services-item number="08." title="RCD Constantly Tripping">
                I would check earth connections, repair or replace faulty connections to resolve the problem of
                RCD constantly tripping.
            </x-services-item>

            <x-services-item number="09." title="Fault Finding">
                I would use specialized tools and equipment to identify the root cause of the problem, then repair or
                replace any faulty components to resolve any issues found during the fault-finding process.
            </x-services-item>

            <x-services-item number="10." title="Fully Insured and Accredited">
                As a fully insured and accredited electrician, I ensure compliance with industry standards and regulations,
                as well as protection for both me and my clients. 
            </x-services-item>
        </x-services-block>
    </div>
        <x-divider width="1/2" />

    <div class="container-mobile flex flex-col items-center">
        <x-services-block title="Installation Work" id="installation">
            <x-services-item number="01." title="Electrical Installation Condition Reports">
                I would inspect and test the electrical installation in a property, report any issues found and provide
                recommended actions to repair or upgrade the installation. 
                An EICR ensures safety and compliance with regulations.
            </x-services-item>

            <x-services-item number="02." title="Replacement of old fuse boards">
                I would replace old and outdated fuse boards with new ones, ensuring they meet current safety 
                regulations and provide better protection for the building and its occupants.
            </x-services-item>

            <x-services-item number="03." title="Fault Finding and Remedial work">
                I would use specialized tools and equipment to identify the root cause of the problem, then carry out the
                necessary remedial work to repair or replace any damaged components and ensure the electrical system is
                working safely and efficiently.
            </x-services-item>

            <x-services-item number="04." title="Additional Sockets Outlets">
                I would install additional sockets and outlets where they are needed, making sure they are properly 
                connected to the power source and in compliance with the current safety regulations.
            </x-services-item>

            <x-services-item number="05." title="Additional Lighting Points">
                I would install additional lighting points where they are needed, making sure they are properly 
                connected to the power source and in compliance with the current safety regulations.
            </x-services-item>

            <x-services-item number="06." title="Audio & Visual Equipment Installation">
                I would install audio and visual equipment, ensuring that the equipment is properly connected to the power
                source and in compliance with the current safety regulations.
            </x-services-item>

            <x-services-item number="07." title="Emergency Lighting Installation">
                I would install emergency lighting systems to ensure the safety of building occupants during power 
                outages or other emergencies, in compliance with current safety regulations.
            </x-services-item>

            <x-services-item number="08." title="Emergency Lighting Testing">
                I would test emergency lighting systems to ensure they are properly functioning, in compliance with 
                current safety regulations, and make repairs or replace any faulty parts as necessary.
            </x-services-item>
        </x-services-block>
    </div>

    <x-divider width="1/2" />

    <div class="container-mobile flex flex-col items-center">
        <x-services-block title="Maintenance work" id="maintenance">
            <x-services-item number="01." title="Pre-Planned Maintenance Schedules">
                I would create and follow a pre-planned maintenance schedule, performing regular inspections and 
                tests to identify and address potential issues, ensuring the safe and efficient operation of
                the electrical systems.
            </x-services-item>

            <x-services-item number="02." title="Lighting Repairs">
                I would repair any damaged or malfunctioning lighting fixtures, ensuring they are in good working
                condition and in compliance with current safety regulations.
            </x-services-item>

            <x-services-item number="03." title="Emergency Lighting">
                I would maintain emergency lighting systems, performing regular inspections and tests to identify and
                address potential issues, ensuring they are always in good working condition and ready to be activated
                in case of an emergency.
            </x-services-item>

            <x-services-item number="04." title="Dilapidation Reporting">
                I would conduct an inspection of the electrical systems and report on any damages, defects or issues found,
                providing recommendations and estimates of the cost of repairs to return the system to
                a safe and compliant state.
            </x-services-item>

            <x-services-item number="05." title="Daily, Weekly and Monthly Visits Available">
                I would make myself available for daily, weekly and monthly visits to perform inspections, maintenance,
                and repairs on the electrical systems, ensuring they are always in good working condition and in compliance
                with safety regulations.
            </x-services-item>

            <x-services-item number="06." title="Fire Alarm Testing">
                I would test fire alarm systems to ensure they are properly functioning, in compliance with current safety
                regulations, and make repairs or replace any faulty parts as necessary.
            </x-services-item>

            <x-services-item number="07." title="Distribution Board Servicing">
                I would service distribution boards, performing regular inspections and tests to identify and address
                potential issues, ensuring they are always in good working condition and in compliance with safety
                regulations.
            </x-services-item>

            <x-services-item number="08." title="New Circuits">
                I would install new circuits, ensuring they are properly connected to the power source and in compliance
                with the current safety regulations.
            </x-services-item>

            <x-services-item number="09." title="Electrical Installation Condition Reports">
                I would conduct an inspection and testing of the electrical installation in a property to check safety
                and compliance, and report any issues found with recommended actions for repair or upgrade.
            </x-services-item>
        </x-services-block>
    </div>
@endsection
