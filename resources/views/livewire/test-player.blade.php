<div class="min-h-screen bg-gray-100 dark:bg-zinc-900 p-4">
    <div class="max-w-8xl mx-auto">
        <!-- Header -->
        <div class="bg-white dark:bg-zinc-800 rounded-lg shadow p-4 mb-4">
            <div class="flex justify-between items-center mb-6"
                @if ($timeRemaining !== null) wire:poll.1s="checkTime" @endif>
                <div>
                    <h2 class="text-2xl font-bold text-gray-800 dark:text-gray-200">{{ $test->title }}</h2>
                    <p class="text-gray-600 dark:text-gray-400">
                        {{ $allSections[$currentSectionIndex]->title }}
                        @if ($allSections[$currentSectionIndex]->parts->count() > 1)
                            <span class="text-gray-400 mx-2">|</span>
                            {{ $allSections[$currentSectionIndex]->parts[$currentPartIndex]->title }}
                        @endif
                    </p>
                </div>

                @if ($timeRemaining !== null)
                    <div
                        class="flex items-center gap-2 px-6 py-4 bg-indigo-50 dark:bg-indigo-900/30 rounded-lg border border-indigo-100 dark:border-indigo-800">
                        <x-icon name="clock" class="w-5 h-5 text-indigo-600 dark:text-indigo-400" />
                        <span class="font-mono text-xl font-bold text-indigo-700 dark:text-indigo-300">
                            {{ gmdate('H:i:s', $timeRemaining) }}
                        </span>
                    </div>
                @endif
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Question Area -->
            <div class="md:col-span-2">
                <div class="bg-white dark:bg-zinc-800 rounded-lg shadow p-6">
                    @if ($currentQuestion)
                        <div class="mb-6">
                            <!-- Question Content -->
                            <div class="mb-8">
                                <div class="flex items-center justify-between mb-4">
                                    <h3 class="text-xl font-medium text-gray-900 dark:text-gray-100">
                                        <span
                                            class="font-bold text-gray-500 dark:text-gray-400 mr-2">Q{{ $currentQuestionIndex + 1 }}.</span>
                                        {{ $currentQuestion->question_text }}
                                    </h3>
                                    <div class="flex gap-2">
                                        <span
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200">
                                            Section {{ $currentSectionIndex + 1 }}/{{ count($allSections) }}
                                        </span>
                                        @if ($allSections[$currentSectionIndex]->parts->count() > 1)
                                            <span
                                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800 dark:bg-purple-900 dark:text-purple-200">
                                                Part
                                                {{ $currentPartIndex + 1 }}/{{ $allSections[$currentSectionIndex]->parts->count() }}
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                @if ($currentQuestion->image_path)
                                    <div class="mb-6">
                                        <img src="{{ asset('storage/' . $currentQuestion->image_path) }}"
                                            class="max-w-full h-auto rounded-lg shadow-sm max-h-96"
                                            alt="Question Image">
                                    </div>
                                @endif

                                <div class="space-y-3">
                                    @foreach ($currentQuestion->options as $option)
                                        <label
                                            class="flex items-start p-4 rounded-lg border-2 cursor-pointer transition-all {{ $selectedAnswer == $option->id ? 'border-primary-600 bg-primary-50 dark:bg-primary-900/20 dark:border-primary-500' : 'border-gray-200 hover:border-gray-300 dark:border-zinc-700 dark:hover:border-zinc-600' }}">
                                            <input type="radio" wire:model="selectedAnswer"
                                                value="{{ $option->id }}"
                                                class="mt-1 h-4 w-4 text-primary-600 focus:ring-primary-500 border-gray-300">
                                            <div class="ml-3 w-full">
                                                @if ($option->image_path)
                                                    <img src="{{ asset('storage/' . $option->image_path) }}"
                                                        class="mb-2 max-w-full h-auto rounded shadow-sm max-h-48"
                                                        alt="Option Image">
                                                @endif
                                                @if ($option->option_text)
                                                    <span
                                                        class="block text-sm font-medium {{ $selectedAnswer == $option->id ? 'text-primary-900 dark:text-primary-100' : 'text-gray-900 dark:text-gray-100' }}">
                                                        {{ $option->option_text }}
                                                    </span>
                                                @endif
                                            </div>
                                        </label>
                                    @endforeach
                                </div>
                            </div> <!-- Action Buttons -->
                            @php
                                $currentStatus = $answers[$currentQuestion->id] ?? 'not_visited';
                                $isQuestionCompleted = $currentStatus !== 'not_visited';
                                $isEndOfSection = $currentQuestionIndex === $sectionEndIndex;
                                $isEndOfTimedSection =
                                    $isEndOfSection && $isTimedSection && $timeRemaining > 0 && $isQuestionCompleted;
                                $canProceedToNextSection = $isEndOfSection && (!$isTimedSection || $timeRemaining <= 0);
                            @endphp

                            <div class="mt-6 pt-6 border-t border-gray-200 dark:border-gray-600" x-data="{ processing: false }"
                                wire:key="question-nav-{{ $currentQuestion->id }}">
                                @if ($isEndOfTimedSection)
                                    <div
                                        class="mb-4 p-4 bg-yellow-50 dark:bg-yellow-900/20 border border-yellow-200 dark:border-yellow-800 rounded-lg text-center">
                                        <p class="text-yellow-800 dark:text-yellow-200 font-medium">
                                            Please wait for the timer to run out before proceeding to the next section.
                                        </p>
                                    </div>
                                @endif

                                <div class="flex flex-wrap gap-3">
                                    {{-- Previous Section button for untimed sections --}}
                                    @if (!$isTimedSection && $currentSectionIndex > 0)
                                        <button wire:click="prevSection" @click="processing = true"
                                            :disabled="processing"
                                            class="px-6 py-4 bg-gray-500 text-white rounded-full hover:bg-gray-600 disabled:opacity-50 disabled:cursor-not-allowed transition-opacity">
                                            ← Previous Section
                                        </button>
                                    @endif

                                    <button wire:click="markForReview" @click="processing = true"
                                        :disabled="processing || {{ $isEndOfTimedSection ? 'true' : 'false' }}"
                                        class="px-6 py-4 bg-blue-600 text-white rounded-full hover:bg-blue-700 disabled:opacity-50 disabled:cursor-not-allowed transition-opacity">
                                        Mark for Review & Next
                                    </button>
                                    <button wire:click="skip" @click="processing = true"
                                        :disabled="processing || {{ $isEndOfTimedSection ? 'true' : 'false' }}"
                                        class="px-6 py-4 bg-red-600 text-white rounded-full hover:bg-red-700 disabled:opacity-50 disabled:cursor-not-allowed transition-opacity">
                                        Skip
                                    </button>
                                    <button wire:click="saveAndNext" @click="processing = true"
                                        :disabled="processing || {{ $isEndOfTimedSection ? 'true' : 'false' }}"
                                        class="px-6 py-4 bg-primary-600 text-white rounded-full hover:bg-primary-700 disabled:opacity-50 disabled:cursor-not-allowed transition-opacity">
                                        Save & Next
                                    </button>

                                    {{-- Next Section button for untimed sections --}}
                                    @if ($canProceedToNextSection && $currentSectionIndex < count($allSections) - 1)
                                        <button wire:click="nextSection" @click="processing = true"
                                            :disabled="processing"
                                            class="px-6 py-4 bg-green-600 text-white rounded-full hover:bg-green-700 disabled:opacity-50 disabled:cursor-not-allowed transition-opacity">
                                            Next Section →
                                        </button>
                                    @endif

                                    @if ($currentQuestionIndex === $totalQuestions - 1)
                                        <button wire:click="submitTest" @click="processing = true"
                                            :disabled="processing"
                                            wire:confirm="Are you sure you want to submit the test?"
                                            class="px-6 py-4 bg-purple-600 text-white rounded-full hover:bg-purple-700 ml-auto disabled:opacity-50 disabled:cursor-not-allowed transition-opacity">
                                            Submit Test
                                        </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>

            <!-- Progress Panel -->
            <div class="md:col-span-1">
                <div class="bg-white dark:bg-zinc-800 rounded-lg shadow p-6 sticky top-4">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-2">Progress</h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mb-4">
                        {{ $allSections[$currentSectionIndex]->title }}
                        @if ($allSections[$currentSectionIndex]->parts->count() > 1)
                            - {{ $allSections[$currentSectionIndex]->parts[$currentPartIndex]->title }}
                        @endif
                    </p>

                    <!-- Legend -->
                    <div class="mb-4 space-y-2 text-sm">
                        <div class="flex items-center">
                            <span class="w-6 h-6 bg-green-500 rounded mr-2"></span>
                            <span class="text-gray-700 dark:text-gray-300">Answered</span>
                        </div>
                        <div class="flex items-center">
                            <span class="w-6 h-6 bg-blue-500 rounded mr-2"></span>
                            <span class="text-gray-700 dark:text-gray-300">Marked for Review</span>
                        </div>
                        <div class="flex items-center">
                            <span class="w-6 h-6 bg-red-500 rounded mr-2"></span>
                            <span class="text-gray-700 dark:text-gray-300">Skipped</span>
                        </div>
                        <div class="flex items-center">
                            <span class="w-6 h-6 bg-gray-300 dark:bg-gray-600 rounded mr-2"></span>
                            <span class="text-gray-700 dark:text-gray-300">Not Visited</span>
                        </div>
                    </div>

                    <!-- Question Grid -->
                    <div class="flex flex-wrap gap-2">
                        @foreach ($allQuestions as $index => $question)
                            @if ($index >= $sectionStartIndex && $index <= $sectionEndIndex)
                                @php
                                    $status = $answers[$question->id] ?? 'not_visited';
                                    $bgColor = match ($status) {
                                        'answered' => 'bg-green-500 hover:bg-green-600 text-white',
                                        'review' => 'bg-blue-500 hover:bg-blue-600 text-white',
                                        'skipped' => 'bg-red-500 hover:bg-red-600 text-white',
                                        default
                                            => 'bg-gray-200 dark:bg-gray-700 hover:bg-gray-300 dark:hover:bg-gray-600 text-gray-700 dark:text-gray-300',
                                    };
                                    $current = $index === $currentQuestionIndex;
                                @endphp
                                <button wire:click="goToQuestion({{ $index }})"
                                    class="w-[50px] h-[50px] flex items-center justify-center rounded-full font-medium text-sm transition-all {{ $bgColor }} {{ $current ? 'ring-4 ring-yellow-400 ring-offset-2 dark:ring-offset-zinc-800' : '' }}">
                                    {{ $index + 1 }}
                                </button>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
