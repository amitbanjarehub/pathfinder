<div class="max-w-6xl mx-auto p-6">
    <div class="bg-white dark:bg-zinc-800 rounded-lg shadow p-6 mb-6">
        <div class="flex justify-between items-center mb-4">
            <div>
                <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">Manage Questions</h2>
                <p class="text-sm text-gray-600 dark:text-gray-400 mt-1">
                    {{ $part->section->test->title }} > {{ $part->section->title }} > {{ $part->title }}
                </p>
            </div>
            <div class="flex gap-2">
                <a href="{{ route('tests.edit', $part->section->test_id) }}"
                    class="px-6 py-4 bg-gray-200 text-gray-700 rounded-full hover:bg-gray-300 dark:bg-zinc-700 dark:text-gray-300"
                    wire:navigate>Back to Test</a>
                @if (!$showQuestionForm)
                    <button wire:click="addQuestion"
                        class="px-6 py-4 bg-primary-600 text-white rounded-full hover:bg-primary-700">Add
                        Question</button>
                @endif
            </div>
        </div>

        <!-- Question Form -->
        @if ($showQuestionForm)
            <div
                class="border border-indigo-300 dark:border-indigo-600 rounded-lg p-6 bg-indigo-50 dark:bg-zinc-900 mb-6">
                <h3 class="text-lg font-medium mb-4 text-gray-900 dark:text-gray-100">
                    {{ $editingQuestionId ? 'Edit Question' : 'Add New Question' }}</h3>
                <form wire:submit="saveQuestion">
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Question
                                Text</label>
                            <textarea wire:model="questionText" rows="3"
                                class="mt-1 block w-full rounded-xl border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-zinc-700 dark:border-zinc-600 dark:text-white"></textarea>
                            @error('questionText')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror

                            <div class="mt-2">
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Question Image
                                    (Optional)</label>
                                <input type="file" wire:model="questionImage"
                                    class="mt-1 block w-full text-sm text-gray-500
                                    file:mr-4 file:py-2 file:px-4
                                    file:rounded-full file:border-0
                                    file:text-sm file:font-semibold
                                    file:bg-indigo-50 file:text-indigo-700
                                    hover:file:bg-indigo-100
                                "
                                    accept="image/*">
                                @if ($questionImage)
                                    <img src="{{ $questionImage->temporaryUrl() }}"
                                        class="mt-2 h-32 rounded-lg object-cover">
                                @elseif ($editingQuestionId && \App\Models\Question::find($editingQuestionId)->image_path)
                                    <img src="{{ asset('storage/' . \App\Models\Question::find($editingQuestionId)->image_path) }}"
                                        class="mt-2 h-32 rounded-lg object-cover">
                                @endif
                                @error('questionImage')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Type</label>
                                <select wire:model.live="questionType"
                                    class="mt-1 block w-full rounded-full border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-zinc-700 dark:border-zinc-600 dark:text-white">
                                    <option value="mcq">Multiple Choice</option>
                                    <option value="text">Text Answer</option>
                                    <option value="likert">Likert Scale</option>
                                </select>
                            </div>
                            {{-- <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Marks</label>
                                <input type="number" wire:model="marks"
                                    class="mt-1 block w-full rounded-full border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-zinc-700 dark:border-zinc-600 dark:text-white">
                                @error('marks')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div> --}}

                            @if ($questionType !== 'likert')
                            <div>
                                <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Marks</label>
                                <input type="number" wire:model="marks"
                                    class="mt-1 block w-full rounded-full border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-zinc-700 dark:border-zinc-600 dark:text-white">
                                @error('marks')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                @enderror
                            </div>
                            @else
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 dark:text-gray-300">Marks</label>
                                    <input type="number" value="Auto Calculated" disabled
                                        class="mt-1 block w-full rounded-full bg-gray-100 text-gray-500 cursor-not-allowed">
                                </div>
                            @endif
                        </div>

                        @if ($questionType === 'mcq')
                            <div>
                                <label
                                    class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Options</label>
                                @foreach ($options as $index => $option)
                                    <div class="mb-4 p-4 border border-gray-200 dark:border-gray-700 rounded-lg"
                                        wire:key="option-{{ $index }}">
                                        <div class="flex gap-2 mb-2">
                                            <input type="text" wire:model="options.{{ $index }}.text"
                                                placeholder="Option {{ $index + 1 }}"
                                                class="flex-1 rounded-full border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:bg-zinc-700 dark:border-zinc-600 dark:text-white">
                                            <label class="flex items-center">
                                                <input type="checkbox"
                                                    wire:model="options.{{ $index }}.is_correct"
                                                    class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                                                <span
                                                    class="ml-2 text-sm text-gray-700 dark:text-gray-300">Correct</span>
                                            </label>
                                        </div>

                                        <div>
                                            <input type="file" wire:model="optionImages.{{ $index }}"
                                                class="block w-full text-xs text-gray-500
                                                file:mr-4 file:py-1 file:px-2
                                                file:rounded-full file:border-0
                                                file:text-xs file:font-semibold
                                                file:bg-gray-50 file:text-gray-700
                                                hover:file:bg-gray-100
                                            "
                                                accept="image/*">

                                            @if (isset($optionImages[$index]) && $optionImages[$index])
                                                <img src="{{ $optionImages[$index]->temporaryUrl() }}"
                                                    class="mt-2 h-20 rounded-lg object-cover">
                                            @elseif (!empty($option['image_path']))
                                                <img src="{{ asset('storage/' . $option['image_path']) }}"
                                                    class="mt-2 h-20 rounded-lg object-cover">
                                            @endif
                                            @error('optionImages.' . $index)
                                                <span class="text-red-500 text-xs">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif

                        @if ($questionType === 'likert')
                          <div>
                              <label class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                  Likert Scale Preview
                              </label>
                      
                              <div class="flex justify-between items-center bg-gray-100 dark:bg-zinc-700 p-4 rounded-lg">
                                  <span class="text-sm text-green-600">Agree</span>
                      
                                  <div class="flex gap-3">
                                      @for ($i = 1; $i <= 7; $i++)
                                          <div class="w-8 h-8 rounded-full border-2 border-gray-400"></div>
                                      @endfor
                                  </div>
                      
                                  <span class="text-sm text-red-500">Disagree</span>
                              </div>
                      
                              <p class="text-xs text-gray-500 mt-2">
                                  Default 7-point Likert scale will be used (1 = Strongly Disagree, 7 = Strongly Agree)
                              </p>
                          </div>
                        @endif

                        <div class="flex justify-end gap-2">
                            <button type="button" wire:click="cancelQuestionForm"
                                class="px-6 py-4 bg-gray-200 text-gray-700 rounded-full hover:bg-gray-300 dark:bg-zinc-700 dark:text-gray-300">Cancel</button>
                            <button type="submit"
                                class="px-6 py-4 bg-primary-600 text-white rounded-full hover:bg-primary-700">Save
                                Question</button>
                        </div>
                    </div>
                </form>
            </div>
        @endif
    </div>

    <!-- Questions List -->
    <div class="bg-white dark:bg-zinc-800 rounded-lg shadow p-6">
        <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-200 mb-4">Questions ({{ $questions->count() }})
        </h3>
        @forelse($questions as $question)
            <div
                class="border border-gray-200 dark:border-gray-600 rounded-lg p-4 mb-3 hover:shadow-md transition-shadow">
                <div class="flex justify-between items-start">
                    <div class="flex-1">
                        <p class="text-gray-900 dark:text-gray-100 font-medium">{{ $question->question_text }}</p>
                        <div class="mt-2 text-sm text-gray-600 dark:text-gray-400">
                            <span
                                class="inline-flex items-center px-2 py-1 rounded-full bg-blue-100 text-blue-800 dark:bg-blue-900 dark:text-blue-200 mr-2">
                                {{ ucfirst($question->question_type) }}
                            </span>
                            <span
                                class="inline-flex items-center px-2 py-1 rounded-full bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200">
                                {{ $question->marks }} {{ $question->marks == 1 ? 'mark' : 'marks' }}
                            </span>
                        </div>

                        @if ($question->question_type === 'mcq' && $question->options->count() > 0)
                            <div class="mt-3 space-y-1">
                                @foreach ($question->options as $option)
                                    <div class="flex items-center text-sm">
                                        <span
                                            class="w-5 h-5 flex items-center justify-center rounded-full text-xs {{ $option->is_correct ? 'bg-green-100 text-green-800 dark:bg-green-900 dark:text-green-200' : 'bg-gray-100 text-gray-600 dark:bg-gray-700 dark:text-gray-400' }} mr-2">
                                            {{ chr(65 + $loop->index) }}
                                        </span>
                                        <span
                                            class="{{ $option->is_correct ? 'font-medium text-green-700 dark:text-green-300' : 'text-gray-700 dark:text-gray-300' }}">
                                            {{ $option->option_text }}
                                        </span>
                                        @if ($option->is_correct)
                                            <span class="ml-2 text-xs text-green-600 dark:text-green-400">✓
                                                Correct</span>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>

                    <div class="flex gap-2 ml-4">
                        <button wire:click="editQuestion({{ $question->id }})"
                            class="px-3 py-1 bg-primary-600 text-white text-sm rounded hover:bg-primary-700">Edit</button>
                        <button wire:click="deleteQuestion({{ $question->id }})" wire:confirm="Delete this question?"
                            class="px-3 py-1 bg-red-600 text-white text-sm rounded hover:bg-red-700">Delete</button>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-gray-500 dark:text-gray-400 text-center py-8">No questions yet. Click "Add Question" to get
                started.</p>
        @endforelse
    </div>
</div>
