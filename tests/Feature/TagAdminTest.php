<?php

use App\Models\Tag;

beforeEach(function () {
    $this->withoutVite();
});

function tagAdminData(array $overrides = []): array
{
    return array_merge(['name' => 'Astuce', 'slug' => 'astuce'], $overrides);
}

it('creates a tag and flashes a message', function () {
    $this->post(route('admin.tags.store'), tagAdminData())
        ->assertRedirect(route('admin.tags.index'))
        ->assertSessionHas('success', 'Tag créé.');

    $this->assertDatabaseHas('tags', ['slug' => 'astuce']);
});

it('rejects an empty tag with French messages', function () {
    $this->post(route('admin.tags.store'), ['name' => '', 'slug' => ''])
        ->assertSessionHasErrors([
            'name' => 'Le champ nom est obligatoire.',
            'slug' => 'Le champ slug est obligatoire.',
        ]);
});

it('rejects a slug already used by another tag', function () {
    Tag::factory()->create(['name' => 'Tests', 'slug' => 'tests']);

    $this->post(route('admin.tags.store'), tagAdminData(['slug' => 'tests']))
        ->assertSessionHasErrors(['slug' => 'Ce slug est déjà utilisé par un autre tag.']);
});

it('blocks tag writes when the site is read-only', function () {
    config(['site.read_only' => true]);

    $this->post(route('admin.tags.store'), tagAdminData())
        ->assertStatus(503)
        ->assertSee('Le site est en lecture seule.');
});

it('still shows the tag list when the site is read-only', function () {
    config(['site.read_only' => true]);

    $this->get(route('admin.tags.index'))->assertOk();
});
