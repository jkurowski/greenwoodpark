<a
        href="{{ route('admin.crm.clients.show', $row->id) }}"
        class="btn action-button mr-1"
        data-bs-toggle="tooltip"
        data-bs-title="Profil">
    <i class="fe-user"></i>
</a>
<a
    href="{{ route('admin.crm.clients.rodo', $row->id) }}"
    class="btn action-button mr-1"
    data-bs-toggle="tooltip"
    data-bs-title="Zgody RODO">
    <i class="fe-check-circle"></i>
</a>
