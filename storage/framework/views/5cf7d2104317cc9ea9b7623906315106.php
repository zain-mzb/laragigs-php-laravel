<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
        <?php if (isset($component)) { $__componentOriginal53747ceb358d30c0105769f8471417f6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53747ceb358d30c0105769f8471417f6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card','data' => ['class' => 'p-10']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'p-10']); ?>
            <div class="flex flex-col items-center justify-center text-center">
                <img class="w-48 mr-6 mb-6"
                    src="<?php echo e($listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')); ?>" <h3
                    class="text-2xl mb-2">
                <?php echo e($listing->title); ?>

                </h3>
                <div class="text-xl font-bold mb-4"><?php echo e($listing->company); ?></div>

                <?php if (isset($component)) { $__componentOriginal56202f52dfd40daa6c756a0f1fd91cd3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal56202f52dfd40daa6c756a0f1fd91cd3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.listing-tags','data' => ['tagsCsv' => $listing->tags]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('listing-tags'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tagsCsv' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($listing->tags)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal56202f52dfd40daa6c756a0f1fd91cd3)): ?>
<?php $attributes = $__attributesOriginal56202f52dfd40daa6c756a0f1fd91cd3; ?>
<?php unset($__attributesOriginal56202f52dfd40daa6c756a0f1fd91cd3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal56202f52dfd40daa6c756a0f1fd91cd3)): ?>
<?php $component = $__componentOriginal56202f52dfd40daa6c756a0f1fd91cd3; ?>
<?php unset($__componentOriginal56202f52dfd40daa6c756a0f1fd91cd3); ?>
<?php endif; ?>

                <div class="text-lg my-4">
                    <i class="fa-solid fa-location-dot"></i> <?php echo e($listing->location); ?>

                </div>
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <h3 class="text-3xl font-bold mb-4">Job Description</h3>
                    <div class="text-lg space-y-6">
                        <?php echo e($listing->description); ?>


                        <a href="mailto:<?php echo e($listing->email); ?>"
                            class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"><i
                                class="fa-solid fa-envelope"></i>
                            Contact Employer</a>

                        <a href="<?php echo e($listing->website); ?>" target="_blank"
                            class="block bg-black text-white py-2 rounded-xl hover:opacity-80"><i
                                class="fa-solid fa-globe"></i>
                            Visit Website</a>
                    </div>
                </div>
            </div>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53747ceb358d30c0105769f8471417f6)): ?>
<?php $attributes = $__attributesOriginal53747ceb358d30c0105769f8471417f6; ?>
<?php unset($__attributesOriginal53747ceb358d30c0105769f8471417f6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53747ceb358d30c0105769f8471417f6)): ?>
<?php $component = $__componentOriginal53747ceb358d30c0105769f8471417f6; ?>
<?php unset($__componentOriginal53747ceb358d30c0105769f8471417f6); ?>
<?php endif; ?>


        <?php if (isset($component)) { $__componentOriginal53747ceb358d30c0105769f8471417f6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal53747ceb358d30c0105769f8471417f6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.card','data' => ['class' => 'mt-4 p-2 flex space-x-6']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-4 p-2 flex space-x-6']); ?>
            <a href="/listings/<?php echo e($listing->id); ?>/edit">
                <i class="fa-solid fa-pencil">
                </i> Edit
            </a>

            <form method="POST" action="/listings/<?php echo e($listing->id); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>

                <button class="text-red-500">
                    <i class="fa-solid fa-trash"></i> Delete

                </button>


            </form>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal53747ceb358d30c0105769f8471417f6)): ?>
<?php $attributes = $__attributesOriginal53747ceb358d30c0105769f8471417f6; ?>
<?php unset($__attributesOriginal53747ceb358d30c0105769f8471417f6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal53747ceb358d30c0105769f8471417f6)): ?>
<?php $component = $__componentOriginal53747ceb358d30c0105769f8471417f6; ?>
<?php unset($__componentOriginal53747ceb358d30c0105769f8471417f6); ?>
<?php endif; ?>

        
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php /**PATH C:\Users\【Egrowth】MUHAMMADZAI\Desktop\all\laravel\laragigs\resources\views/listings/show.blade.php ENDPATH**/ ?>