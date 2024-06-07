@extends('layouts.layout')

@section('title', 'contacts')

@section('content')
    <link href="{{ asset('css/contacts.css?v=') . time() }}" rel="stylesheet">

    <script>
        $(document).ready(function() {
            $('.faq-list .answer').hide(); // Скрываем все ответы при загрузке страницы
            $('.faq-list .question').click(function() {
                $(this).next('.answer').slideToggle();
            });
        });
    </script>

    <div class="content">
        <div class="contacts">
            <h1>CONTACTS</h1>

            <div class="contact-section">
                <div class="contact-details">
                    <p>+7 (495) 957-07-27</p>
                    <p>Tue, Wed, Sun: 10:00 AM — 6:00 PM</p>
                </div>

                <div class="contact-details">
                    <p>+7 (495) 957-07-00</p>
                    <p>Thu, Fri, Sat: 10:00 AM — 9:00 PM/p>
                </div>
            </div>

        </div>

        <div class="contact-faq">
            <h2>FAQ</h2>
            <ul class="faq-list">
                <li>
                    <div class="question">What are the admission prices?</div>
                    <div class="answer">Answer: Admission prices vary depending on age, membership, and special exhibitions.
                        Please check our website or contact us directly for current rates.</div>
                </li>
                <li>
                    <div class="question">Are there guided tours available?</div>
                    <div class="answer">Answer: Yes, we offer guided tours led by knowledgeable docents. Advance booking may
                        be
                        required for certain tours.</div>
                </li>
                <li>
                    <div class="question">Can I take photographs inside the museum?</div>
                    <div class="answer">Answer: Photography policies vary by exhibition and artwork. Please check with
                        museum
                        staff or look for signage indicating photography policies.</div>
                </li>
                <li>
                    <div class="question">Is there parking available near the museum?</div>
                    <div class="answer">Answer: Yes, there are parking facilities available near the museum. However,
                        availability may vary depending on the time of day and special events.</div>
                </li>
                <li>
                    <div class="question">Are there any discounts available for students or seniors?</div>
                    <div class="answer">Answer: Yes, we offer discounts for students, seniors, and other eligible groups.
                        Please
                        present valid identification to avail of these discounts.</div>
                </li>
                <li>
                    <div class="question">Can I bring food or drinks into the museum?</div>
                    <div class="answer">Answer: Food and drinks are typically not allowed inside the museum galleries to
                        help
                        preserve the artwork. However, there may be designated areas where you can enjoy refreshments.</div>
                </li>
                <li>
                    <div class="question">Are strollers allowed inside the museum?</div>
                    <div class="answer">Answer: Yes, strollers are allowed inside the museum. We also provide stroller
                        parking
                        facilities for your convenience.</div>
                </li>
                <li>
                    <div class="question">Can I bring large bags or backpacks into the museum?</div>
                    <div class="answer">Answer: For security reasons and to protect the artwork, large bags and backpacks
                        may be
                        subject to inspection or required to be checked at the coat check.</div>
                </li>
                <li>
                    <div class="question">Is the museum wheelchair accessible?</div>
                    <div class="answer">Answer: Yes, the museum is fully wheelchair accessible. We also offer accommodations
                        for
                        visitors with disabilities. Please let us know how we can assist you.</div>
                </li>
                <li>
                    <div class="question">How can I donate artwork or artifacts to the museum?</div>
                    <div class="answer">Answer: If you're interested in donating artwork or artifacts, please contact our
                        acquisitions department. They will guide you through the process and discuss any potential
                        donations.
                    </div>
                </li>
            </ul>
        </div>
    </div>

    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
@endsection
