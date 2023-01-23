<div class="container mx-auto mt-6">
    <ul class="flex flex-wrap md:flex-row justify-evenly items-center box-border">
        <li class="py-2"><a class="inline-block uppercase px-4 py-3 box-border text-lg text-gray-900 font-bold hover:border-b-4 border-b-primary active:border-b-primary" href="{{ route('product.show', $product->id) }}">Description</a></li>
        <li class="p-2"><a class="inline-block uppercase px-4 py-3 box-border text-lg text-gray-900 font-bold hover:border-b-4 border-b-primary active:border-b-primary" href="{{ route('product-parameter.show', $product->id) }}">Parameter</a></li>
        <li class="p-2"><a class="inline-block uppercase px-4 py-3 box-border text-lg text-gray-900 font-bold hover:border-b-4 border-b-primary active:border-b-primary" href="{{ route('product-application.show', $product->id) }}">Application</a></li>
        <li class="p-2"><a class="inline-block uppercase px-4 py-3 box-border text-lg text-gray-900 font-bold hover:border-b-4 border-b-primary active:border-b-primary" href="{{ route('video.show', $product->id) }}">Video</a></li>
        <li class="p-2"><a class="inline-block uppercase px-4 py-3 box-border text-lg text-gray-900 font-bold hover:border-b-4 border-b-primary active:border-b-primary" href="{{ route('certificate.show', $product->id) }}">Certificate</a></li>
        <li class="p-2"><a class="inline-block uppercase px-4 py-3 box-border text-lg text-gray-900 font-bold hover:border-b-4 border-b-primary active:border-b-primary" href="{{ route('faqs.show', $product->id) }}">Faq</a></li>
    </ul>
</div>