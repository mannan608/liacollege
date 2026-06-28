class CourseMaterial extends Model
{
    protected $fillable = [
        'course_id',
        'title',
        'file',
        'sort_order'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}